@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Barangay</h1>
    <form action="{{ route('brgys.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <!-- Assuming you want to select a city when creating a barangay -->
        <div class="mb-3">
            <label for="city_id" class="form-label">City</label>
            <select class="form-select" id="city_id" name="city_id" required>
                <option selected>Select a city...</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Barangay</button>
    </form>
</div>
@endsection
