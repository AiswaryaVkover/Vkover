<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospitallist;
use App\Models\Manager;


class hospitalListController extends Controller
{

    public function createHospitalUnderManager(Request $request, $managerId)
{
    //  already validated $managerId as a valid manager ID
    
    return view('hospitallist.create', compact('managerId'));

    // Redirect or return response
}
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all hospitals
        $hospitals = Hospitallist::all();
        
        // Fetch hospital list with their managers
        $hospitallist= Hospitallist::with('manager')->get();
        //dd($hospitallist);

        // Fetch managers with their associated hospitals
        $manager= Manager::with('hospitallist')->get();
        
    
        return view('hospitallist.index' , compact('hospitallist','manager','hospitals'));
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
        $validatedData = $request->validate([
            'username' => 'required|string',
            'hospitalname' => 'required|string',
            'pan' => 'required|string',
            'bankname' => 'required|string',
            'ifsccode' => 'required|string',
            'accountnumber' => 'required|string',
            'manager_id' => 'required|integer', // Assuming manager_id is an integer
        ]);

        // Create a new hospital instance and set its attributes
        $hospital = new Hospitallist();
        $hospital->username = $validatedData['username'];
        $hospital->hospitalname = $validatedData['hospitalname'];
        $hospital->pan = $validatedData['pan'];
        $hospital->bankname = $validatedData['bankname'];
        $hospital->ifsccode = $validatedData['ifsccode'];
        $hospital->accountnumber = $validatedData['accountnumber'];
        $hospital->manager_id = $validatedData['manager_id'];

        // Save the hospital to the database
        $hospital->save();

        // Redirect back with a success message
        return redirect()->route('hospital.index')->with('success', 'Hospital added successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id )
    {
       $hospitalId =1;
        return view('hospital.show', ['hospitalId' => $hospitalId]);
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
