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
    <form method='post' action="/employee/loanrequests/document/{{$loan->id}}">
        {{csrf_field()}}
        <img src="{{URL('storage/employee/'.$loan->loandocument)}}" alt='document' width="250" height="250"><br>
        <label for="loanstatus">Select the loan status:</label><br>
        <select id="loanstatus" name="loanstatus" >
            <option value="ACCEPTED">ACCEPTED</option>
            <option value="FORWARDED">FORWARDED</option>
            <option value="REJECTED">REJECTED</option>
        </select><br>

        <input type="submit" name="submit" value="update">
    </form>
</body>
</html>
@endsection