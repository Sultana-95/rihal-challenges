@extends('layouts.app')

@section('title' , 'Countries')

@section('content')
<form action="{{url('countries/store')}}" method="POST">
{{-- <form action="{{ route('countries.store') }}" method="post"> --}}
    @csrf
    <div class="form-group has-danger">
        <label class="form-label mt-4" for="name">
            Country name
            <span class="text-danger">*</span>
        </label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button class="btn btn-success mt-2">Submit</button>
</form>
@endsection
