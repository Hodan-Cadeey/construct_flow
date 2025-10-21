<?php

namespace App\Http\Controllers;

use App\Models\Contractor;

use Illuminate\Http\Request;

class ContractorController extends Controller
{
    //
    public function index()
    {

        return view('contractors', ['contractor' => Contractor::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contractors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'contractor_code' => 'required|string|max:255',
            'legal_name' => 'required|string|max:255',
            'trade' => 'required|in:electrical,plumbing,hvac,carpentry,concrete,roofing,landscaping,other',
            'country' => 'required|string|size:2',
        ]);


        // Nieuw record aanmaken in de database
        Contractor::create($validated);

        // Redirecten naar de lijst met contractors
        return redirect()->route('contractors.index')->with('success', 'Contractor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('contractors.show', ["aannemers" => Contractor::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // 
        return view('contractors.edit', ["aannemers" => Contractor::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $aannemers = Contractor::findOrFail($id);

        $validated = $request->validate([
            'contractor_code' => 'required|string|max:255',
            'legal_name' => 'required|string|max:255',
            'trade' => 'required|in:electrical,plumbing,hvac,carpentry,concrete,roofing,landscaping,other',
            'country' => 'required|string|size:2',
        ]);

        $aannemers->update($validated);

        return redirect()->route('contractors.index')->with('success', 'Contractor created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $aannemers = Contractor::find($id);
        $aannemers->delete();
        return redirect()->route('contractors.index')->with('success', 'Contractor deleted successfully'); }
}
