<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Make sure to import your Event model

class EventController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Create a new Event instance
        $event = new Event();
        $event->name = $validatedData['name'];
        $event->venue = $validatedData['venue'];
        $event->address = $validatedData['address'];
        $event->telephone = $validatedData['telephone'];
        $event->email = $validatedData['email'];
        $event->start_time = $validatedData['start_time'];
        $event->end_time = $validatedData['end_time'];
        $event->start_date = $validatedData['start_date'];
        $event->end_date = $validatedData['end_date'];

        // Save the event to the database
        $event->save();

        // Optionally, you can redirect back with a success message
        return redirect()->back()->with('success', 'Event added successfully');
    }

    public function update(Request $request, Event $event)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Update event with validated data
        $event->update($validatedData);

        return redirect()->back()->with('success', 'Event updated successfully');
        
    }
    public function destroy($id)
    {
        $event = Event::findOrFail($id); // Find the event by its ID or throw an error if not found
        $event->delete(); // Delete the event from the database

        return redirect()->back()->with('success', 'Event deleted successfully'); // Redirect back with a success message
    }
}
