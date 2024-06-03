@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-4">Gotardo - Laravel Exam Output</h1>
    </div>

    <!-- Section for Cities -->
    <div class="my-4">
        <h2>Cities</h2>
        <div class="btn-group" role="group" aria-label="City actions">
            <a href="{{ route('cities.index') }}" class="btn btn-primary">View All Cities</a>
            <a href="{{ route('cities.create') }}" class="btn btn-success">Create New City</a>
        </div>
    </div>

    <!-- Section for Patients -->
    <div class="my-4">
        <h2>Patients</h2>
        <div class="btn-group" role="group" aria-label="Patient actions">
            <a href="{{ route('patients.index') }}" class="btn btn-primary">View All Patients</a>
            <a href="{{ route('patients.create') }}" class="btn btn-success">Create New Patient</a>
        </div>
    </div>

    <!-- Section for Barangays -->
    <div class="my-4">
        <h2>Barangays</h2>
        <div class="btn-group" role="group" aria-label="Barangay actions">
            <a href="{{ route('brgys.index') }}" class="btn btn-primary">View All Barangays</a>
            <a href="{{ route('brgys.create') }}" class="btn btn-success">Create New Barangay</a>
        </div>
    </div>

    <!-- Section for Reports -->
    <div class="my-4">
        <h2>Reports</h2>
        <div class="btn-group" role="group" aria-label="Report actions">
            <a href="{{ route('reports.awareness') }}" class="btn btn-primary">View Awareness Report</a>
            <a href="{{ route('reports.coronaVirus') }}" class="btn btn-primary">View Corona Virus Status</a>
        </div>
    </div>

    <!-- Additional Sections as Needed -->

</div>
@endsection