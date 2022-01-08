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
<table class='table table-borded'>
<th>Accountid</th>
<th>Accountname</th>
<th>Accounttype</th>
<th>Balance</th>
<th>AccountState</th>
@foreach($account as $account)
<tr>
<td>{{$account->id}}</td>
<td>{{$account->accountname}}</td>
<td>{{$account->accounttype}}</td>
<td>{{$account->accountbalance}}</td>
<td>{{$account->accountstate}}</td>
<td><a href="/employee/Accountinfo/document/{{$account->id}}">document</a></td>
</tr>
@endforeach
</table>
</body>
</html>
@endsection