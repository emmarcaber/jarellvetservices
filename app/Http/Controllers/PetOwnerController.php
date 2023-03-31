<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetOwner;

class PetOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pet_owners = PetOwner::all();
        return view('petowners.index', compact('pet_owners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petowners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|max:20',
            'address' => 'required|max:255',
        ]);

        $owner = PetOwner::create($validatedData);
        return redirect()->route('petowners.index')->with('success', 'Owner created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $pet_owner)
    {
        return view('petowners.show', compact('pet_owner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $pet_owner)
    {
        return view('petowners.edit', compact('pet_owner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $pet_owner)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|max:20',
            'address' => 'required|max:255',
        ]);

        $pet_owner->update($validatedData);
        return redirect()->route('petowners.index')->with('success', 'Owner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $pet_owner)
    {
        $pet_owner->delete();

        return redirect()->route('petowners.index')->with('success', 'Owner deleted successfully.');
    }
}
