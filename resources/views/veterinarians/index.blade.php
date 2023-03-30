@extends('layouts.app')
@section('content')
    <h2>Veterinarians</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addVeterinarianModal">Add Veterinarian</button>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th>Name</th>
            <th>Contact Info</th>
            <th>Professional Qualifications</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($veterinarians as $veterinarian)
            <tr>
                <td>{{ $veterinarian->name }}</td>
                <td>{{ $veterinarian->contact_info }}</td>
                <td>{{ $veterinarian->professional_qualifications }}</td>
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editVeterinarianModal" data-id="{{ $veterinarian->id }}" data-name="{{ $veterinarian->name }}" data-contact-info="{{ $veterinarian->contact_info }}" data-professional-qualifications="{{ $veterinarian->professional_qualifications }}">Edit</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteVeterinarianModal" data-id="{{ $veterinarian->id }}">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('veterinarians.modals')
@endsection
