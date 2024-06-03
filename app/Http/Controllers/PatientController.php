<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Brgy;

class PatientController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $brgys = Brgy::all();
        $caseTypes = ['PUI', 'PUM', 'Positive on Covid', 'Negative on Covid'];
        $coronavirusStatuses = ['active', 'recovered', 'death'];
        return view('patients.create', compact('brgys', 'caseTypes', 'coronavirusStatuses'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brgy_id' => 'required|integer|exists:brgys,id',
            'number' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'case_type' => 'required|in:PUI,PUM,Positive on Covid,Negative on Covid',
            'coronavirus_status' => 'required|in:active,recovered,death',
        ]);

        Patient::create($request->all());

        return redirect()->route('patients.index')->with('success', 'Patient created successfully.');
    }

    // Display the specified resource.
    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    // Show the form for editing the specified resource.
    public function edit(Patient $patient)
    {
        $brgys = Brgy::all();
        $caseTypes = ['PUI', 'PUM', 'Positive on Covid', 'Negative on Covid'];
        $coronavirusStatuses = ['active', 'recovered', 'death'];
        return view('patients.edit', compact('patient', 'brgys', 'caseTypes', 'coronavirusStatuses'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brgy_id' => 'required|integer|exists:brgys,id',
            'number' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'case_type' => 'required|in:PUI,PUM,Positive on Covid,Negative on Covid',
            'coronavirus_status' => 'required|in:active,recovered,death',
        ]);

        $patient->update($request->all());

        return redirect()->route('patients.index')->with('success', 'Patient updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully.');
    }
}