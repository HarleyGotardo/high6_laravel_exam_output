@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Patient</h1>
    <form action="{{ route('patients.update', $patient->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $patient->name }}" required>
        </div>
        <div class="mb-3">
            <label for="brgy_id" class="form-label">Brgy ID</label>
            <select class="form-control" id="brgy_id" name="brgy_id" required>
                @foreach($brgys as $brgy)
                    <option value="{{ $brgy->id }}" {{ $patient->brgy_id == $brgy->id ? 'selected' : '' }}>{{ $brgy->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input type="text" class="form-control" id="number" name="number" value="{{ $patient->number }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $patient->email }}">
        </div>
        <div class="mb-3">
            <label for="case_type" class="form-label">Case Type</label>
            <select class="form-control" id="case_type" name="case_type" required>
                @foreach($caseTypes as $type)
                    <option value="{{ $type }}" {{ $patient->case_type == $type ? 'selected' : '' }}>{{ ucfirst($type) }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="coronavirus_status" class="form-label">Coronavirus Status</label>
            <select class="form-control" id="coronavirus_status" name="coronavirus_status" required>
                @foreach($coronavirusStatuses as $status)
                    <option value="{{ $status }}" {{ $patient->coronavirus_status == $status ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Patient</button>
    </form>
</div>
@endsection