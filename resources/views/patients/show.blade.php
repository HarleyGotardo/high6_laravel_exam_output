@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $patient->name }}</h1>
    <p><strong>Brgy ID:</strong> {{ $patient->brgy_id }}</p>
    <p><strong>Brgy Name:</strong> {{ $patient->brgy->name }}</p>
    <p><strong>City:</strong> {{ $patient->brgy->city->name }}</p> <!-- Add this line -->
    <p><strong>Number:</strong> {{ $patient->number }}</p>
    <p><strong>Email:</strong> {{ $patient->email }}</p>
    <p><strong>Case Type:</strong> {{ $patient->case_type }}</p>
    <p><strong>Coronavirus Status:</strong> {{ $patient->coronavirus_status }}</p>

    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
?>