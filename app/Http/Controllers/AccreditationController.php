<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Accreditation;
use Illuminate\View\View;
class AccreditationController extends Controller
{
    
    public function addAccreditation(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'qualification' => 'required|string|max:255',
            'accreditation_number' => 'required|string|max:255',
            'validity' => 'required|date',
        ]);

        // Store validated data in the database
        Accreditation::create([
            'qualification' => $validated['qualification'],
            'accreditation_number' => $validated['accreditation_number'],
            'validity' => $validated['validity'],
        ]);

        return redirect()->back()->with('success', 'Accreditation data added successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'qualification' => 'required|string',
            'accreditation_number' => 'required|string',
            'validity' => 'required|date',
        ]);

        $accreditation = Accreditation::findOrFail($id);
        $accreditation->qualification = $request->qualification;
        $accreditation->accreditation_number = $request->accreditation_number;
        $accreditation->validity = $request->validity;
        $accreditation->save();

        return redirect()->back()->with('success', 'Accreditation updated successfully!');
    }

    public function destroy(Accreditation $accreditation)
    {
        $accreditation->delete();

        return redirect()->back()->with('success', 'Accreditation deleted successfully!');
    }

}
