<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $events = Event::all();
        return $this->success('Events retrieved successfully', $events);
    }

    public function store(StoreEventRequest $request)
    {
        $event = Event::create($request->validated());
        return $this->success('Event created successfully', $event, 201);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return $this->success('Event retrieved successfully', $event);
    }

    public function update(UpdateEventRequest $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->validated());
        return $this->success('Event updated successfully', $event);
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return $this->success('Event deleted successfully');
    }
}
