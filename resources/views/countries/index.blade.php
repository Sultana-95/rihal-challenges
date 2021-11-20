@extends('layouts.app')

@section('title' , 'Countries')

@section('content')
<a href="/countries/create"><button type="submit" class="btn btn-success "> {{__('Create')}} </button></a>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Country name
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
                <tr>
                    <td>
                        {{ $country->name }}
                    </td>
                    <td>
                                    
                                
                        <form action="{{ url('/countries/delete/'.$country->id) }}" method="POST">
                            {{-- @method('delete') --}}
                            <a href="{{ url('countries/edit/'.$country->id) }}" class="btn btn-primary btn-sm  mb-2">{{__('Edit')}}</a>
                            @csrf
                            <button class="btn btn-primary btn-sm  mb-2">{{__('Delete')}}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if($countries->hasPages())
        <div class="d-flex justify-content-between">
            <a class="btn btn-info" href="{{ $countries->previousPageUrl() }}">
                Prev
            </a>
            <a class="btn btn-info" href="{{ $countries->nextPageUrl() }}">
                Next
            </a>
        </div>
    @endif
@endsection
