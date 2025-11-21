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
        return view('communities.edit', compact('community'));
    }

    public function store(StoreCommunityRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('communities', 'public');
        }
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
        if ($request->hasFile('logo')) {
            if ($community->logo) {
                Storage::disk('public')->delete($community->logo);
            }
            $data['logo'] = $request->file('logo')->store('communities', 'public');
        }
        $community->update($data);

        return redirect()->route('communities.index')->with('status', 'Community updated successfully');
    }

    public function destroy(Community $community)
    {
        if ($community->logo) {
            Storage::disk('public')->delete($community->logo);
        }
        $community->delete();

        return redirect()->route('communities.index')->with('status', 'Community deleted successfully');
    }
}
