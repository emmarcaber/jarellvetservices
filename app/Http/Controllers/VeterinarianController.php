<?php

namespace App\Http\Controllers;

use App\Models\PetOwner;
use App\Models\Veterinarian;
use Illuminate\Http\Request;

class VeterinarianController extends Controller
{
    public function index()
    {
        $veterinarians = Veterinarian::all();
        $pet_owners = PetOwner::all();

        return view('veterinarians.index', compact('veterinarians', 'pet_owners'));
    }

    public function create()
    {
        return view('veterinarians.create');
    }

    public function store(Request $request)
    {
        Veterinarian::create($request->all());
        return redirect()->route('veterinarians.index');
    }

    public function show(Veterinarian $veterinarian)
    {
        return view('veterinarians.show', compact('veterinarian'));
    }

    public function edit(Veterinarian $veterinarian)
    {
        return view('veterinarians.edit', compact('veterinarian'));
    }

    public function update(Request $request, Veterinarian $veterinarian)
    {
        $veterinarian->update($request->all());
        return redirect()->route('veterinarians.index');
    }

    public function destroy(Veterinarian $veterinarian)
    {
        $veterinarian->delete();
        return redirect()->route('veterinarians.index')->with('success', 'Veterinarian deleted successfully.');
    }
}
