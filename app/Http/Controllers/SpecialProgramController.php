<?php

namespace App\Http\Controllers;

use App\Models\SpecialProgram;
use Illuminate\Http\Request;

class SpecialProgramController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'program_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'program_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
    
        // Handle file upload
        if ($request->hasFile('program_image')) {
            $image = $request->file('program_image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('programs/special'), $imageName);
            $validated['program_image'] = $imageName; // Store only the filename in the database
        }
    
        // Store validated data in database
        SpecialProgram::create([
            'program_image' => $validated['program_image'],
            'program_name' => $validated['program_name'],
            'description' => $validated['description'],
        ]);
    
        return redirect()->back()->with('success', 'SpecialProgram added successfully!');
    }

    public function update(Request $request, SpecialProgram $specialProgram)
    {
        // Validate the request
        $validated = $request->validate([
            'program_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'program_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Handle file upload
        if ($request->hasFile('program_image')) {
            $image = $request->file('program_image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('programs/special'), $imageName);
            $validated['program_image'] = $imageName; // Store only the filename in the database
        }

        // Update validated data in database
        $specialProgram->update($validated);

        return redirect()->back()->with('success', 'SpecialProgram updated successfully!');
    }

    public function destroy($id)
    {
        $program = SpecialProgram::findOrFail($id);
        $program->delete();
    
        return redirect()->back()->with('success', 'Program deleted successfully');
    }
    

}
