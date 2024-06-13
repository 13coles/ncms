<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Partner;


class PartnerController extends Controller
{
    public function showpartners()
    {
        $partners = Partner::all(); // Fetch all partners from the database
        return view('cms.partners', compact('partners'));
    }
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url',
        ]);
    
        // Handle file upload
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads/partner-logos'), $imageName);
            $validated['logo'] = $imageName; // Store only the filename in the database
        }
    
        // Store validated data in database
        Partner::create([
            'logo' => $validated['logo'],
            'link' => $validated['link'],
        ]);
    
        return redirect()->back()->with('success', 'Partner added successfully!');
    }

    public function destroy(Request $request)
    {
        // Validate the request
        $request->validate([
            'selected_partners' => 'required|array',
            'selected_partners.*' => 'exists:partners,id',
        ]);

        // Retrieve selected partner IDs
        $selectedPartners = $request->input('selected_partners');

        // Delete selected partners
        Partner::whereIn('id', $selectedPartners)->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Selected partners deleted successfully.');
    }
    
}
