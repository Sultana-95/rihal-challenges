@extends('layouts.app')

@section('title' , 'Students')

@section('content')
<form action="{{ url('students/update/' .$student->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group has-danger">
        <label class="form-label mt-4" for="name">
            Name
            <span class="text-danger">*</span>
        </label>
        <input name="name" value="{{ $student->name }}" type="text" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group has-danger">
        <label class="form-label mt-4" for="class_id">
            Class
            <span class="text-danger">*</span>
        </label>
        <select name="class_id" class="form-control @error('class_id') is-invalid @enderror">
            <option>Choose Class</option>
            @foreach ($classes as $class)
                <option value="{{ $class->id }}" @if($class->id == $student->class_id) selected @endif>
                    {{ $class->class_name }}
                </option>
            @endforeach
        </select>
        @error('class_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group has-danger">
        <label class="form-label mt-4" for="country_id">
            Country
            <span class="text-danger">*</span>
        </label>
        <select name="country_id" class="form-control @error('country_id') is-invalid @enderror">
            <option>Choose Country</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}" @if($country->id == $student->country_id) selected @endif>
                    {{ $country->name }}
                </option>
            @endforeach
        </select>
        @error('country_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group has-danger">
        <label class="form-label mt-4" for="date">
            Date Of Birth
            <span class="text-danger">*</span>
        </label>
        <input name="date_of_birth" value="{{ $student->date_of_birth }}" type="date" class="form-control @error('date_of_birth') is-invalid @enderror">
        @error('date_of_birth')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button class="btn btn-success mt-2">Submit</button>
</form>
@endsection
