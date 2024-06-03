<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brgy;
use App\Models\City;

class BrgyController extends Controller
{
    // This function retrieves all barangays from the database and returns them to the 'brgys.index' view
    public function index()
    {
        $brgys = Brgy::all();
        return view('brgys.index', compact('brgys'));
    }

    // This function returns the 'brgys.create' view where a new barangay can be created
    public function create()
    {
        $cities = City::all();
        return view('brgys.create', compact('cities'));
    }

    // This function validates the request data and stores a new barangay in the database, then redirects to the 'brgys.index' view
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        Brgy::create($request->all());
        return redirect()->route('brgys.index')->with('success', 'Barangay created successfully.');
    }

    // This function retrieves a specific barangay from the database and returns it to the 'brgys.show' view
    public function show(Brgy $brgy)
    {
        return view('brgys.show', compact('brgy'));
    }

    // This function retrieves a specific barangay from the database and returns it to the 'brgys.edit' view for editing
    public function edit(Brgy $brgy)
    {
        $cities = City::all();
        return view('brgys.edit', compact('brgy', 'cities'));
    }

    // This function validates the request data and updates a specific barangay in the database, then redirects to the 'brgys.index' view
    public function update(Request $request, Brgy $brgy)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city_id' => 'required|integer|exists:cities,id'
        ]);
        $brgy->update($request->all());
        return redirect()->route('brgys.index')->with('success', 'Barangay updated successfully.');
    }

    // This function deletes a specific barangay from the database and then redirects to the 'brgys.index' view
    public function destroy(Brgy $brgy)
    {
        $brgy->delete();
        return redirect()->route('brgys.index')->with('success', 'Barangay deleted successfully.');
    }
}