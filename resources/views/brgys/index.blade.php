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
                </tr>
            </thead>
            <tbody>
                @foreach ($brgys as $brgy)
                    <tr>
                        <td>{{ $brgy->id }}</td>
                        <td>{{ $brgy->name }}</td>
                        <td>{{ $brgy->city->name?? 'Unknown' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection