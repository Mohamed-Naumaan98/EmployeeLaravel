@extends('layouts.app')

@section('title', 'Employee List')

@section('content')
    <h1>Employee List</h1>

    @foreach ($divisions as $division => $employees)
        <h2>{{ $division }}</h2>
        <ul>
            @foreach ($employees as $employee)
                <li>{{ $employee->name }} - {{ $employee->position }}</li>
            @endforeach
        </ul>
    @endforeach
@endsection
