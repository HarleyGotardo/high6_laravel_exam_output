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
                    <th>Case Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->case_type }}</td>
                        <td>{{ $patient->coronavirus_status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
