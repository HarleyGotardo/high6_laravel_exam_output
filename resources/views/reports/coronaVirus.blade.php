@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Corona Virus Status Report</h1>
    <div class="card">
        <div class="card-header">Status</div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Active</dt>
                <dd class="col-sm-9">{{ $active }}</dd>

                <dt class="col-sm-3">Recovered</dt>
                <dd class="col-sm-9">{{ $recovered }}</dd>

                <dt class="col-sm-3">Death</dt>
                <dd class="col-sm-9">{{ $death }}</dd>
            </dl>
        </div>
    </div>
</div>
@endsection