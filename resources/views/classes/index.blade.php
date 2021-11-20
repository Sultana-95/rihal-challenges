@extends('layouts.app')

@section('title' , 'classes')

@section('content')
<a href="/classes/create"><button type="submit" class="btn btn-success "> {{__('Create')}} </button></a>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Class name
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $classe)
                <tr>
                    <td>
                        {{ $classe->class_name }}
                    </td>
                    <td>
                        <form action="{{ url('/classes/delete/'.$classe->id) }}" method="POST">
                            {{-- @method('delete') --}}
                            <a href="{{ url('classes/edit/'.$classe->id) }}" class="btn btn-primary btn-sm  mb-2">{{__('Edit')}}</a>
                            @csrf
                            <button class="btn btn-primary btn-sm  mb-2">{{__('Delete')}}</button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if($classes->hasPages())
        <div class="d-flex justify-content-between">
            <a class="btn btn-info" href="{{ $classes->previousPageUrl() }}">
                Prev
            </a>
            <a class="btn btn-info" href="{{ $classes->nextPageUrl() }}">
                Next
            </a>
        </div>
    @endif
@endsection
