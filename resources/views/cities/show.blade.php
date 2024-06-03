<!-- resources/views/cities/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>City Details</h1>
    <div class="card mt-4">
        <div class="card-header">
            {{ $city->name }}
        </div>
        <div class="card-body">
            <p>ID: {{ $city->id }}</p>
            <p>Name: {{ $city->name }}</p>
        </div>
    </div>
    <a href="{{ route('cities.index') }}" class="btn btn-secondary mt-3">Back to Cities</a>
</div>
@endsection
