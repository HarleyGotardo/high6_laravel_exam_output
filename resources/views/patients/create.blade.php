@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Patient</h1>
    <form action="{{ route('patients.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required autofocus>
        </div>
        <div class="mb-3">
            <label for="brgy_id" class="form-label">Barangay ID</label>
            <select class="form-control" id="brgy_id" name="brgy_id" required>
                @foreach($brgys as $brgy)
                    <option value="{{ $brgy->id }}">{{ $brgy->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input type="text" class="form-control" id="number" name="number" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="case_type" class="form-label">Case Type</label>
            <select class="form-control" id="case_type" name="case_type" required>
                @foreach($caseTypes as $caseType)
                    <option value="{{ $caseType }}">{{ $caseType }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="coronavirus_status" class="form-label">Coronavirus Status</label>
            <select class="form-control" id="coronavirus_status" name="coronavirus_status" required>
                @foreach($coronavirusStatuses as $status)
                    <option value="{{ $status }}">{{ ucfirst($status) }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Patient</button>
    </form>
</div>
@endsection