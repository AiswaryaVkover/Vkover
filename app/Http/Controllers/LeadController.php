<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Hospitallist;



class LeadController extends Controller
{

    public function createLeadUnderHospital(Request $request, $hospitalId)
{
    $hospital = Hospitallist::findOrFail($hospitalId);
    $leads = $hospital->lead;
     
        return view('lead.create', compact('hospitalId','leads'));
}

public function leadsForHospital($hospitalId)
    {
        $hospital = Hospitallist::findOrFail($hospitalId);
        $leads = $hospital->lead;
       // dd($leads);

        return view('lead.index', compact('leads'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|string',
            'dob' => 'required|date', // Assuming the date format is correct, otherwise adjust accordingly
            'remark' => 'required|string',
            'hospitallist_id' => 'required|integer', 
            'leadstage' => 'required|string',
        ]);

        // Create a new lead instance
        $lead = new Lead();
        $lead->name = $validatedData['name'];
        $lead->mobile = $validatedData['mobile'];
        $lead->dob = $validatedData['dob'];
        $lead->remark = $validatedData['remark'];
        $lead->hospitallist_id = $validatedData['hospitallist_id'];
        $lead->leadstage = $validatedData['leadstage'];

        // Save the lead to the database
        $lead->save();

        // Optionally, you can redirect the user to another page after successful submission
        return redirect()->route('hospital.index')->with('success', 'Lead created successfully');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
