@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Report') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('reports.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="supervisor_name" class="col-md-4 col-form-label text-md-end">{{ __('Supervisor Name') }}</label>
                            <div class="col-md-6">
                                <input id="supervisor_name" type="text" class="form-control @error('supervisor_name') is-invalid @enderror" name="supervisor_name" value="{{ old('supervisor_name') }}" required autocomplete="supervisor_name" autofocus>
                                @error('supervisor_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="degree_name" class="col-md-4 col-form-label text-md-end">{{ __('Degree Name') }}</label>
                            <div class="col-md-6">
                                <input id="degree_name" type="text" class="form-control @error('degree_name') is-invalid @enderror" name="degree_name" value="{{ old('degree_name') }}" required autocomplete="degree_name" autofocus>
                                @error('degree_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <textarea id="address" rows="5" class="form-control" @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus></textarea>
                                
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>
                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('degree_name') }}" required autocomplete="dob" autofocus>
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="matrices_no" class="col-md-4 col-form-label text-md-end">{{ __('Matrices No.') }}</label>
                            <div class="col-md-6">
                                <input id="matrices_no" type="text" class="form-control @error('matrices_no') is-invalid @enderror" name="matrices_no" value="{{ old('matrices_no') }}" required autocomplete="matrices_no" autofocus>
                                @error('matrices_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="absctract" class="col-md-4 col-form-label text-md-end">{{ __('Absctract') }}</label>
                            <div class="col-md-6">
                                <textarea id="absctract" rows="5" class="form-control" @error('absctract') is-invalid @enderror" name="absctract" value="{{ old('absctract') }}" required autocomplete="absctract" autofocus>{!! nl2br($report->absctract) !!}</textarea>
                                
                                @error('absctract')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                                <a class="btn btn-light" href="{{ route('home') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(function() {
        $('#address').summernote();
        $('#absctract').summernote();
    });
</script>
@endsection