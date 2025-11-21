<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommunityRequest;
use App\Http\Requests\UpdateCommunityRequest;
use App\Models\Community;
use App\Traits\ApiResponse;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CommunityController extends Controller
{
    use ApiResponse;

    public function index()
    {
        return $this->success('Communities fetched successfully', Community::latest()->paginate());
    }

    public function store(StoreCommunityRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $data['logo'] = $this->storeLogo($request->file('logo'));
        }

        $community = Community::create($data);
        return $this->success('Community created successfully', $community, 201);
    }

    public function show(int $id)
    {
        $community = Community::findOrFail($id);
        return $this->success('Community fetched successfully', $community);
    }

    public function update(UpdateCommunityRequest $request, int $id)
    {
        $community = Community::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            if ($community->logo) {
                Storage::disk('public')->delete($community->logo);
            }
            $data['logo'] = $this->storeLogo($request->file('logo'));
        }

        $community->update($data);
        return $this->success('Community updated successfully', $community);
    }

    public function destroy(int $id)
    {
        $community = Community::findOrFail($id);
        if ($community->logo) {
            Storage::disk('public')->delete($community->logo);
        }
        $community->delete();

        return $this->success('Community deleted successfully', null);
    }

    protected function storeLogo(UploadedFile $file): string
    {
        return $file->store('communities', 'public');
    }
}
