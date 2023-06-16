@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br />
                    <br />
                    {{-- TODO: Check if report available, if not display button --}}
                    @if($report)
                    {{-- {{ $report->title }} --}}
                    <a class="btn btn-primary" href="{{ route('reports.generate-pdf') }}" target="_blank">View</a>
                    <a class="btn btn-warning" href="{{ route('reports.edit', $report->id) }}">Edit</a>
                    @else
                    <a class="btn btn-primary" href="{{ route('reports.create') }}">Create New Report</a>
                    @endif
                    
                    
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
