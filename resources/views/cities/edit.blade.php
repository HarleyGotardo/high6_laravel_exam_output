<!-- resources/views/cities/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit City</h1>
    <form action="{{ route('cities.update', $city->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">City Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $city->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection