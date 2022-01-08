@extends('layouts.employee.app')
@section('navbar')
@parent
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
    <form method='post' action="/employee/Accountinfo/document/{{$account->id}}">
        {{csrf_field()}}
       <img src="{{URL('storage/employee/'.$account->accountdocument)}}" alt='document' width="250" height="250"><br>
        <label for="accountstate">Select the loan status:</label><br>
        <select id="accountstate" name="accountstate" >
            <option value="ACTIVE">ACTIVE</option>
            <option value="INACTIVE">INACTIVE</option>
        </select><br>       
        <input type="submit" name="submit" value="update">
    </form>
</body>
</html>
@endsection