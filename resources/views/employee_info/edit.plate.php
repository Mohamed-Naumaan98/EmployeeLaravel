@extends('layouts.app')

@section('title', 'Edit Employee Information')

@section('content')
    <h1>Edit Employee Information</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('employee.info.processForm') }}">
        @csrf

        <div class="mb-3">
            <label for="new_field" class="form-label">New Field:</label>
            <input type="text" name="new_field" class="form-control" value="{{ $employee->new_field }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Information</button>
    </form>
@endsection
