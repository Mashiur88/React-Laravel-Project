@extends('layouts.employee.app')
@section('navbar')
@parent
@if(session()->has('empid'))
<a class="btn btn-primary" href="/employee/edit/{{session()->get('empid')}}">Edit Profile</a>
<a class="btn btn-primary" href="/employee/profile/{{session()->get('empid')}}">Profile</a>
@endif
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Employee Profile</h3>
    <p>UserName: {{$employee->empname}}</p>
    <p>FirstName: {{$bankuser->firstname}}</p>
    <p>LastName: {{$bankuser->lastname}}</p>
    <p>Gender: {{$bankuser->gender}}</p>
    <p>Date of Birth: {{$bankuser->dateofbirth}}</p>
    <p>Phone: {{$bankuser->phone}}</p>
    <p>Email: {{$bankuser->email}}</p>
    <p>NID: {{$bankuser->nid}}</p>
</body>
</html>
@endsection