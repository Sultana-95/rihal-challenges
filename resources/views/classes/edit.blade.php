@extends('layouts.app')

@section('title' , 'Classes')

@section('content')
<form action="{{ url('classes/update/'.$classe->id) }}"
    method="post">
    @csrf
    @method('PUT')
    <div class="form-group has-danger">
        <label class="form-label mt-4" for="class_name">
            Class name
            <span class="text-danger">*</span>
        </label>
        <input name="class_name" type="text" value="{{ $classe->class_name }}" class="form-control @error('class_name') is-invalid @enderror">
        @error('class_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button class="btn btn-success mt-2">Submit</button>
</form>
@endsection
