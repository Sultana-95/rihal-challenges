@extends('layouts.app')

@section('title' , 'Students')

@section('content')
<a href="/students/create"><button type="submit" class="btn btn-success "> {{__('Create')}} </button></a>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Class
                </th>
                <th>
                    Country
                </th>
                <th>
                    Date Of Birth
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>
                        {{ $student->name }}
                    </td>
                    <td>
                        {{ $student->class->class_name }}
                    </td>
                    <td>
                        {{ $student->country->name }}
                    </td>
                    <td>
                        {{ $student->date_of_birth }}
                    </td>
                    <td>
                        <form action="{{ url('/students/delete/'.$student->id) }}" method="POST">
                            {{-- @method('delete') --}}
                            <a href="{{ url('students/edit/'.$student->id) }}" class="btn btn-primary btn-sm  mb-2">{{__('Edit')}}</a>
                            @csrf
                            <button class="btn btn-primary btn-sm  mb-2">{{__('Delete')}}</button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if($students->hasPages())
        <div class="d-flex justify-content-between">
            <a class="btn btn-info" href="{{ $students->previousPageUrl() }}">
                Prev
            </a>
            <a class="btn btn-info" href="{{ $students->nextPageUrl() }}">
                Next
            </a>
        </div>
    @endif
@endsection
