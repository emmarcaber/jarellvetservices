<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\PetOwner;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::all();
        $pet_owners = PetOwner::all();

        return view('pets.index', compact('pets', 'pet_owners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'owner_id' => 'required|exists:pet_owners,id',
        ]);

        Pet::create($validatedData);
        return redirect()->route('pets.index')->with('success', 'Pet added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $pet)
    {
        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $pet)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'pet_owner_id' => 'required|exists:pet_owners,id',
        ]);

        $pet->update($validatedData);

        return redirect()->route('pets.index')->with('success', 'Pet updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pet->delete();

        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully.');
    }
}
