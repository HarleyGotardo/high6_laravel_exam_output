<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    // This function retrieves all patients from the database and returns them to the 'patients.index' view
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    // This function returns the 'patients.create' view where a new patient can be created
    public function create()
    {
        return view('patients.create');
    }

    // This function validates the request data and stores a new patient in the database, then redirects to the 'patients.index' view
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        Patient::create($request->all());
        return redirect()->route('patients.index')->with('success', 'Patient created successfully.');
    }

    // This function retrieves a specific patient from the database and returns it to the 'patients.show' view
    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    // This function retrieves a specific patient from the database and returns it to the 'patients.edit' view for editing
    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    // This function validates the request data and updates a specific patient in the database, then redirects to the 'patients.index' view
    public function update(Request $request, Patient $patient)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $patient->update($request->all());
        return redirect()->route('patients.index')->with('success', 'Patient updated successfully.');
    }

    // This function deletes a specific patient from the database and then redirects to the 'patients.index' view
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully.');
    }
}