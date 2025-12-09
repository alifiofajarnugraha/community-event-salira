@extends('layouts.tailwind-app')

@section('content')
    <div class="mb-6 flex flex-col md:flex-row md:items-start md:justify-between gap-4">
        <div class="space-y-2">
            <h1 class="text-3xl font-semibold text-gray-800">{{ $community->name }}</h1>
            <div class="flex items-center gap-4">
                @if($community->members)
                    <span class="text-gray-600">{{ $community->members }} members</span>
                @endif
                @if($community->category)
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">{{ $community->category }}</span>
                @endif
            </div>
        </div>
        <div class="flex gap-2">
            <a href="{{ route('communities.edit', $community) }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Edit</a>
            <a href="{{ route('communities.index') }}" class="px-4 py-2 border border-gray-300 text-gray-600 rounded-lg hover:bg-gray-100 transition">Back to Communities</a>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow p-6 md:p-8 space-y-8">
        <!-- Header with Icon and Basic Info -->
        <div class="flex items-start gap-4">
            @if($community->icon)
                <div class="w-16 h-16 rounded-xl flex items-center justify-center text-2xl" style="background-color: {{ $community->accent ?? '#E6F2FF' }}">
                    {{ $community->icon }}
                </div>
            @endif
            <div class="flex-1">
                @if($community->description)
                    <p class="text-gray-600 text-lg mb-4">{{ $community->description }}</p>
                @endif
                
                @if($community->tags && count($community->tags) > 0)
                    <div class="flex flex-wrap gap-2">
                        @foreach($community->tags as $tag)
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">{{ $tag }}</span>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <!-- Statistics Section -->
        @if($community->statistics)
            <div class="border-t pt-6">
                <h3 class="font-semibold text-gray-800 mb-4">Community Statistics</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @if(isset($community->statistics['totalPosts']))
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600">{{ $community->statistics['totalPosts'] }}</div>
                            <div class="text-sm text-gray-600">Total Posts</div>
                        </div>
                    @endif
                    
                    @if(isset($community->statistics['activeMembers']))
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-green-600">{{ $community->statistics['activeMembers'] }}</div>
                            <div class="text-sm text-gray-600">Active Members</div>
                        </div>
                    @endif
                    
                    @if(isset($community->statistics['monthlyGrowth']))
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-purple-600">{{ $community->statistics['monthlyGrowth'] }}</div>
                            <div class="text-sm text-gray-600">Monthly Growth</div>
                        </div>
                    @endif
                    
                    @if(isset($community->statistics['engagement']))
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-orange-600">{{ $community->statistics['engagement'] }}</div>
                            <div class="text-sm text-gray-600">Engagement</div>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <!-- Activities Section -->
        @if($community->activities && count($community->activities) > 0)
            <div class="border-t pt-6">
                <h3 class="font-semibold text-gray-800 mb-4">Activities</h3>
                <div class="space-y-3">
                    @foreach($community->activities as $activity)
                        <div class="p-4 bg-gray-50 rounded-lg">
                            @if(isset($activity['name']))
                                <h4 class="font-medium text-gray-800">{{ $activity['name'] }}</h4>
                            @endif
                            @if(isset($activity['description']))
                                <p class="text-gray-600 text-sm">{{ $activity['description'] }}</p>
                            @endif
                            @if(isset($activity['frequency']))
                                <span class="inline-block mt-2 px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">{{ $activity['frequency'] }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Moderators Section -->
        @if($community->moderators && count($community->moderators) > 0)
            <div class="border-t pt-6">
                <h3 class="font-semibold text-gray-800 mb-4">Moderators</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($community->moderators as $moderator)
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            @if(isset($moderator['avatar']))
                                <img src="{{ $moderator['avatar'] }}" alt="{{ $moderator['name'] ?? 'Moderator' }}" class="w-10 h-10 rounded-full">
                            @else
                                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                                    <span class="text-gray-600 text-sm">{{ substr($moderator['name'] ?? 'M', 0, 1) }}</span>
                                </div>
                            @endif
                            <div>
                                @if(isset($moderator['name']))
                                    <div class="font-medium text-gray-800">{{ $moderator['name'] }}</div>
                                @endif
                                @if(isset($moderator['role']))
                                    <div class="text-sm text-gray-600">{{ $moderator['role'] }}</div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Rules Section -->
        @if($community->rules && count($community->rules) > 0)
            <div class="border-t pt-6">
                <h3 class="font-semibold text-gray-800 mb-4">Community Rules</h3>
                <ol class="space-y-2">
                    @foreach($community->rules as $index => $rule)
                        <li class="flex gap-3">
                            <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white text-sm rounded-full flex items-center justify-center">{{ $index + 1 }}</span>
                            <span class="text-gray-700">{{ $rule }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        @endif

        <!-- Long Description -->
        @if($community->long_description)
            <div class="border-t pt-6">
                <h3 class="font-semibold text-gray-800 mb-4">About This Community</h3>
                <div class="prose max-w-none text-gray-600">
                    {!! nl2br(e($community->long_description)) !!}
                </div>
            </div>
        @endif

        <!-- Related Communities -->
        @if($community->related && count($community->related) > 0)
            <div class="border-t pt-6">
                <h3 class="font-semibold text-gray-800 mb-4">Related Communities</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($community->related as $related)
                        <div class="p-4 border border-gray-200 rounded-lg">
                            @if(isset($related['name']))
                                <h4 class="font-medium text-gray-800">{{ $related['name'] }}</h4>
                            @endif
                            @if(isset($related['description']))
                                <p class="text-gray-600 text-sm mt-1">{{ $related['description'] }}</p>
                            @endif
                            @if(isset($related['members']))
                                <span class="inline-block mt-2 text-xs text-gray-500">{{ $related['members'] }} members</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Footer with Actions -->
        <div class="border-t pt-6 flex justify-between items-center">
            <div class="text-sm text-gray-500">
                Created: {{ $community->created_at->format('M d, Y') }}
                @if($community->updated_at != $community->created_at)
                    | Updated: {{ $community->updated_at->format('M d, Y') }}
                @endif
            </div>
            
            <form action="{{ route('communities.destroy', $community) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this community?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-100 text-red-600 text-sm rounded-lg hover:bg-red-200 transition">Delete Community</button>
            </form>
        </div>
    </div>
@endsection