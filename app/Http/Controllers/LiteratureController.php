<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLiteratureRequest;
use App\Http\Requests\UpdateLiteratureRequest;
use App\Models\Literature;

class LiteratureController extends Controller
{
    public function index()
    {
        $literatures = Literature::latest()->paginate(10);
        return view('literatures.index', compact('literatures'));
    }

    public function create()
    {
        return view('literatures.create');
    }

    public function store(StoreLiteratureRequest $request)
    {
        $data = $this->prepareData($request->validated(), $request);
        Literature::create($data);

        return redirect()->route('literatures.index')->with('status', 'Literature created successfully');
    }

    public function show(Literature $literature)
    {
        return view('literatures.show', compact('literature'));
    }

    public function edit(Literature $literature)
    {
        return view('literatures.edit', compact('literature'));
    }

    public function update(UpdateLiteratureRequest $request, Literature $literature)
    {
        $data = $this->prepareData($request->validated(), $request, $literature);
        $literature->update($data);

        return redirect()->route('literatures.index')->with('status', 'Literature updated successfully');
    }

    public function destroy(Literature $literature)
    {
        $literature->delete();

        return redirect()->route('literatures.index')->with('status', 'Literature deleted successfully');
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
