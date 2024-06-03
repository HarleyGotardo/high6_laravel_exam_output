@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Barangays</h1>
    @if ($brgys->isEmpty())
        <p>No barangays found.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brgys as $brgy)
                    <tr>
                        <td>{{ $brgy->id }}</td>
                        <td>{{ $brgy->name }}</td>
                        <td>{{ $brgy->city->name?? 'Unknown' }}</td>
                        <td>
                            <a href="{{ route('brgys.show', $brgy->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('brgys.edit', $brgy->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('brgys.destroy', $brgy->id) }}" method="POST" style="display:inline;">
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