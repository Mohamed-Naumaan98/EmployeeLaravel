@extends('layouts.app')

@section('title', 'Employee Information')

@section('content')
    <h1>Employee Information</h1>

    <ul>
        <li><strong>Name:</strong> {{ $employee->name }}</li>
        <li><strong>Email:</strong> {{ $employee->email }}</li>
    </ul>
@endsection
