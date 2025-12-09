<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommunityRequest;
use App\Http\Requests\UpdateCommunityRequest;
use App\Models\Community;
use Illuminate\Support\Facades\Storage;

class CommunityController extends Controller
{
    public function index()
    {
        $communities = Community::latest()->paginate(10);
        return view('communities.index', compact('communities'));
    }

    public function create()
    {
        return view('communities.create');
    }

    public function show(Community $community)
    {
        return view('communities.show', compact('community'));
    }

    public function store(StoreCommunityRequest $request)
    {
        $data = $request->validated();
        
        // Process tags from comma-separated input
        if ($request->has('tags_input')) {
            $tags = array_filter(array_map('trim', explode(',', $request->tags_input)));
            $data['tags'] = $tags;
        }
        
        // Process activities from JSON string input
        if ($request->has('activities_input')) {
            $activities = json_decode($request->activities_input, true);
            $data['activities'] = $activities ?: null;
        }
        
        // Process related communities from JSON string input
        if ($request->has('related_input')) {
            $related = json_decode($request->related_input, true);
            $data['related'] = $related ?: null;
        }
        
        // Process moderators from JSON string input
        if ($request->has('moderators_input')) {
            $moderators = json_decode($request->moderators_input, true);
            $data['moderators'] = $moderators ?: null;
        }
        
        // Process rules from comma-separated input
        if ($request->has('rules_input')) {
            $rules = array_filter(array_map('trim', explode(',', $request->rules_input)));
            $data['rules'] = $rules;
        }
        
        // Generate statistics
        $data['statistics'] = [
            'totalPosts' => rand(100, 5000),
            'activeMembers' => $data['member_count'] ? rand(500, $data['member_count']) : rand(500, 2000),
            'monthlyGrowth' => '+' . rand(5, 30) . '%',
            'engagement' => ['Low', 'Medium', 'High', 'Very High'][rand(0, 3)]
        ];
        
        Community::create($data);

        return redirect()->route('communities.index')->with('status', 'Community created successfully');
    }

    public function edit(Community $community)
    {
        return view('communities.edit', compact('community'));
    }

    public function update(UpdateCommunityRequest $request, Community $community)
    {
        $data = $request->validated();
        
        // Process tags from comma-separated input
        if ($request->has('tags_input')) {
            $tags = array_filter(array_map('trim', explode(',', $request->tags_input)));
            $data['tags'] = $tags;
        }
        
        // Process activities from JSON string input
        if ($request->has('activities_input')) {
            $activities = json_decode($request->activities_input, true);
            $data['activities'] = $activities ?: $community->activities;
        }
        
        // Process related communities from JSON string input
        if ($request->has('related_input')) {
            $related = json_decode($request->related_input, true);
            $data['related'] = $related ?: $community->related;
        }
        
        // Process moderators from JSON string input
        if ($request->has('moderators_input')) {
            $moderators = json_decode($request->moderators_input, true);
            $data['moderators'] = $moderators ?: $community->moderators;
        }
        
        // Process rules from comma-separated input
        if ($request->has('rules_input')) {
            $rules = array_filter(array_map('trim', explode(',', $request->rules_input)));
            $data['rules'] = $rules;
        }
        
        $community->update($data);

        return redirect()->route('communities.index')->with('status', 'Community updated successfully');
    }

    public function destroy(Community $community)
    {
        $community->delete();

        return redirect()->route('communities.index')->with('status', 'Community deleted successfully');
    }
}
