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
    <h3>News Form</h3>
    <form action="{{route('employee.news')}}" method='post' enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="title">Enter News Title:</label><br>
        <input type="text" name="newstitle" id="newstitle"><br>
        @if($errors->has('newstitle'))
			<span class="text-danger">
				<strong> {{$errors->first('newstitle')}} </strong>
			</span>
		@endif <br>
        <span>News Description:</span><br>
        <textarea name="newsdesc" id="newsdesc" cols="20" rows="3"></textarea><br>
        @if($errors->has('newsdesc'))
			<span class="text-danger">
				<strong> {{$errors->first('newsdesc')}} </strong>
			</span>
		@endif <br>
        <span>News Picture:</span>
        <input type='file' name="newsPicture" id="newsPicture"><br>
        @if($errors->has('newsPicture'))
			<span class="text-danger">
				<strong> {{$errors->first('newsPicture')}} </strong>
			</span>
		@endif <br>
        <input type='submit' name='submit' value="post">
    </form>
</body>
</html>
@endsection