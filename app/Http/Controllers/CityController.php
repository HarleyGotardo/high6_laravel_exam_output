<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    // This function retrieves all cities from the database and returns them to the 'cities.index' view
    public function index()
    {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    // This function returns the 'cities.create' view where a new city can be created
    public function create()
    {
        return view('cities.create');
    }

    // This function validates the request data and stores a new city in the database, then redirects to the 'cities.index' view
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        City::create($request->all());
        return redirect()->route('cities.index')->with('success', 'City created successfully.');
    }

    // This function retrieves a specific city from the database and returns it to the 'cities.show' view
    public function show(City $city)
    {
        return view('cities.show', compact('city'));
    }

    // This function retrieves a specific city from the database and returns it to the 'cities.edit' view for editing
    public function edit(City $city)
    {
        return view('cities.edit', compact('city'));
    }

    // This function validates the request data and updates a specific city in the database, then redirects to the 'cities.index' view
    public function update(Request $request, City $city)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $city->update($request->all());
        return redirect()->route('cities.index')->with('success', 'City updated successfully.');
    }

    // This function deletes a specific city from the database and then redirects to the 'cities.index' view
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index')->with('success', 'City deleted successfully.');
    }
}