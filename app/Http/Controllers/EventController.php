<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(10);
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function store(StoreEventRequest $request)
    {
        $data = $request->validated();
        
        // Process tags from comma-separated input
        if ($request->has('tags_input')) {
            $tags = array_filter(array_map('trim', explode(',', $request->tags_input)));
            $data['tags'] = $tags;
        }
        
        Event::create($data);

        return redirect()->route('events.index')->with('status', 'Event created successfully');
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $data = $request->validated();
        
        // Process tags from comma-separated input
        if ($request->has('tags_input')) {
            $tags = array_filter(array_map('trim', explode(',', $request->tags_input)));
            $data['tags'] = $tags;
        }
        
        $event->update($data);

        return redirect()->route('events.index')->with('status', 'Event updated successfully');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('status', 'Event deleted successfully');
    }
}
