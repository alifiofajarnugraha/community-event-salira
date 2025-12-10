<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLiteratureRequest;
use App\Http\Requests\UpdateLiteratureRequest;
use App\Http\Resources\LiteratureResource;
use App\Models\Literature;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class LiteratureController extends Controller
{
    use ApiResponse;

    public function index(Request $request)
    {
        $query = Literature::query();
        
        // Add pagination
        $perPage = $request->get('per_page', 15);
        
        // Add search functionality
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        
        // Add author filter
        if ($request->has('author')) {
            $query->where('author', 'like', "%{$request->get('author')}%");
        }
        
        // Add rating filter
        if ($request->has('min_rating')) {
            $query->where('rating', '>=', $request->get('min_rating'));
        }
        
        // Add year filter
        if ($request->has('year')) {
            $query->where('year_edition', 'like', "%{$request->get('year')}%");
        }

        // Add licensing type filter
        if ($request->has('licensing_type')) {
            $query->where('licensing_type', $request->get('licensing_type'));
        }
        
        $literatures = $query->latest('created_at')->paginate($perPage);
        
        return $this->success('Literatures retrieved successfully', LiteratureResource::collection($literatures)->response()->getData());
    }

    public function store(StoreLiteratureRequest $request)
    {
        $data = $this->prepareData($request->validated(), $request);
        
        $literature = Literature::create($data);
        return $this->success('Literature created successfully', new LiteratureResource($literature), 201);
    }

    public function show($id)
    {
        try {
            $literature = Literature::findOrFail($id);
            return $this->success('Literature retrieved successfully', new LiteratureResource($literature));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->error('Literature not found', 404);
        }
    }

    public function update(UpdateLiteratureRequest $request, $id)
    {
        try {
            $literature = Literature::findOrFail($id);
            $data = $this->prepareData($request->validated(), $request, $literature);
            
            $literature->update($data);
            return $this->success('Literature updated successfully', new LiteratureResource($literature));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->error('Literature not found', 404);
        }
    }

    public function destroy($id)
    {
        try {
            $literature = Literature::findOrFail($id);
            $literature->delete();
            return $this->success('Literature deleted successfully');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->error('Literature not found', 404);
        }
    }

    // Additional endpoints for frontend
    public function authors()
    {
        $authors = Literature::distinct()->pluck('author')->filter()->values();
        return $this->success('Authors retrieved successfully', $authors);
    }

    public function topRated()
    {
        $literatures = Literature::where('rating', '>=', 4.0)
                                ->orderBy('rating', 'desc')
                                ->take(10)
                                ->get();
        return $this->success('Top rated literatures retrieved successfully', LiteratureResource::collection($literatures));
    }

    public function mostBookmarked()
    {
        $literatures = Literature::orderBy('total_bookmarked', 'desc')
                                ->take(10)
                                ->get();
        return $this->success('Most bookmarked literatures retrieved successfully', LiteratureResource::collection($literatures));
    }

    public function byCategory(Request $request)
    {
        $category = $request->get('category');
        if (!$category) {
            return $this->error('Category parameter is required', 400);
        }

        $literatures = Literature::whereJsonContains('tags', ['name' => $category])
                                ->take(20)
                                ->get();
        
        return $this->success("Literatures in {$category} category retrieved successfully", LiteratureResource::collection($literatures));
    }

    private function prepareData(array $data, StoreLiteratureRequest|UpdateLiteratureRequest $request, ?Literature $literature = null): array
    {
        if ($request->has('tags_input')) {
            $tags = json_decode($request->tags_input, true);
            $data['tags'] = is_array($tags) ? $tags : ($literature?->tags ?? null);
        }

        if ($request->has('copy_types_input')) {
            $copyTypes = json_decode($request->copy_types_input, true);
            $data['copy_types'] = is_array($copyTypes) ? $copyTypes : ($literature?->copy_types ?? null);
        }

        if ($request->has('sources_input')) {
            $sources = json_decode($request->sources_input, true);
            $data['sources'] = is_array($sources) ? $sources : ($literature?->sources ?? null);
        }

        if ($request->has('twitter_embeds_input')) {
            $twitter = json_decode($request->twitter_embeds_input, true);
            $data['twitter_embeds'] = is_array($twitter) ? $twitter : ($literature?->twitter_embeds ?? null);
        }

        if ($request->has('related_posts_input')) {
            $related = array_filter(array_map('trim', explode(',', (string) $request->related_posts_input)));
            $data['related_posts'] = $related ? array_map('intval', $related) : ($literature?->related_posts ?? null);
        }

        return $data;
    }
}