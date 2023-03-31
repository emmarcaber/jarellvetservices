@extends('layouts.app')
@section('content')
    <h2>Pet Owners</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPetOwnerModal">Add Pet Owner</button>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pet_owners as $pet_owner)
            <tr>
                <td>{{ $pet_owner->name}}</td>
                <td>{{ $pet_owner->address}}</td>
                <td>{{ $pet_owner->email }}</td>
                <td>{{ $pet_owner->phone_number }}</td>
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editPetOwnerModal" data-id="{{ $pet_owner->id }}" data-name="{{ $pet_owner->name }}" data-contact-info="{{ $pet_owner->contact_info }}" data-professional-qualifications="{{ $pet_owner->professional_qualifications }}">Edit</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletePetOwnerModal" data-id="{{ $pet_owner->id }}">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('petowners.modals')
@endsection
