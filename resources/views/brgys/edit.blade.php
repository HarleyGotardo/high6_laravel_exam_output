@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Barangay</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('brgys.update', $brgy->id) }}" method="POST" class="form-edit-brgy">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $brgy->name }}" required>
        </div>

        <div class="form-group">
            <label for="city_id">City:</label>
            <select class="form-control" id="city_id" name="city_id" required>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ $brgy->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection

@section('styles')
<style>
    .form-edit-brgy {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
    }

    .form-edit-brgy .form-group {
        margin-bottom: 15px;
    }

    .form-edit-brgy .form-control {
        border-radius: 0;
    }

    .form-edit-brgy button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-edit-brgy button:hover {
        background-color: #0056b3;
    }
</style>
@endsection