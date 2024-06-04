@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Patients</h1>
    @if ($patients->isEmpty())
        <p>No patients found.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th> <!-- Add this line for the city column -->
                    <th>Case Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->brgy->city->name }}</td> <!-- Add this line for the city name -->
                        <td>{{ $patient->case_type }}</td>
                        <td>{{ $patient->coronavirus_status }}</td>
                        <td>
                            <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
?>