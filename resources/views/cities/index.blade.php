@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Cities</h1>
    @if ($cities->isEmpty())
        <p>No cities found.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->name }}</td>
                        <td>
                            <a href="{{ route('cities.show', $city->id) }}" class="btn btn-success">View</a>
                            <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('cities.destroy', $city->id) }}" method="POST" style="display:inline;">
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