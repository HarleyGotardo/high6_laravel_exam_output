@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $brgy->name }}</h1>
    <p><strong>City ID:</strong> {{ $brgy->city_id }}</p>
    <p><strong>City Name:</strong> {{ $brgy->city->name }}</p>

    <a href="{{ route('brgys.edit', $brgy->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('brgys.destroy', $brgy->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection