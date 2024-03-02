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
        ]);

        // Create a new lead instance
        $lead = new Lead();
        $lead->name = $request->input('name');
        $lead->mobile = $request->input('mobile');
        $lead->dob = $request->input('dob');
        $lead->remark = !empty($request->input('remark'))? $request->input('remark') :null;
        $lead->hospitallist_id = !empty($request->input('hospitallist_id'))? $request->input('hospitallist_id') :null;
        $lead->leadstage = !empty($request->input('leadstage'))? $request->input('leadstage') :null;

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
        $leadshow = Lead::findorFail($id);
        return view('lead.show', compact('leadshow'));
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
