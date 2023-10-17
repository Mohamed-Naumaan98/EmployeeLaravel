<!DOCTYPE html>
<html>
<head>
    <title>{{ $employee->name }}'s Profile</title>
</head>
<body>

    <h1>{{ $employee->name }}'s Profile</h1>

    <img src="{{ asset($employee->profile_image) }}" alt="Profile Image" width="150">

    <ul>
        <li><strong>First Name:</strong> {{ $employee->first_name }}</li>
        <li><strong>Last Name:</strong> {{ $employee->last_name }}</li>
        <li><strong>Department:</strong> {{ $employee->department }}</li>
        <li><strong>Role:</strong> {{ $employee->role }}</li>
        <li><strong>Email:</strong> {{ $employee->email }}</li>
        <li><strong>Number:</strong> {{ $employee->number }}</li>
    </ul>

</body>
</html>
