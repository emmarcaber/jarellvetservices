@extends('layouts.app')
@section('content')
    <h2>Pets</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPetModal">Add Pet</button>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th>Name</th>
            <th>Owner</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->name}}</td>
                <td>{{ $pet->owner_id}}</td>
                <td>{{ $pet->species}}</td>
                <td>{{ $pet->breed}}</td>
                <td>{{ $pet->age}}</td>
                <td>{{ $pet->weight}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editPetModal" data-id="{{ $pet->id }}" data-name="{{ $pet->name }}">Edit</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletePetModal" data-id="{{ $pet->id }}">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('pets.modals')
@endsection
