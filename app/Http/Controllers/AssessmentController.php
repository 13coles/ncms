<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function addAssesment(Request $request) {
        // Validate the request
        $validated = $request->validate([
            'qualification' => 'required|string|max:255',
            'assessment_fee' => 'required|numeric',
            'number_hours' => 'required|string|max:255',
            'number_candidates' => 'required|string|max:255',
        ]);
        // Store validated data in the database
        Assessment::create([
            'qualification' => $validated['qualification'],
            'assessment_fee' => $validated['assessment_fee'],
            'number_hours' => $validated['number_hours'],
            'number_candidates' => $validated['number_candidates'],
        ]);
        return redirect()->back()->with('success', 'Accreditation data added successfully!');
    }

    public function update(Request $request, Assessment $assessment)
    {
        $request->validate([
            'qualification' => 'required|string',
            'assessment_fee' => 'required|numeric',
            'number_hours' => 'required|string',
            'number_candidates' => 'required|string',
        ]);

        $assessment->update([
            'qualification' => $request->qualification,
            'assessment_fee' => $request->assessment_fee,
            'number_hours' => $request->number_hours,
            'number_candidates' => $request->number_candidates,
        ]);

        return redirect()->back()->with('success', 'Assessment updated successfully!');
    }

    public function destroy(Assessment $assessment)
    {
        $assessment->delete();

        return redirect()->back()->with('success', 'Assessment deleted successfully!');
    }
}
