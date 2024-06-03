@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Health Awareness Report</h1>
    <div class="card">
        <div class="card-header">Case Types</div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">PUI</dt>
                <dd class="col-sm-9">{{ $PUI }}</dd>

                <dt class="col-sm-3">PUM</dt>
                <dd class="col-sm-9">{{ $PUM }}</dd>

                <dt class="col-sm-3">Positive on Covid</dt>
                <dd class="col-sm-9">{{ $Positive }}</dd>

                <dt class="col-sm-3">Negative on Covid</dt>
                <dd class="col-sm-9">{{ $Negative }}</dd>
            </dl>
        </div>
    </div>
</div>
@endsection