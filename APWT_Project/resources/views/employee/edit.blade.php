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
    <h3>Edit Profile</h3>
    <form action="/employee/edit/{{session()->get('empid')}}" method='post'>
		{{csrf_field()}}
        <label>Employee Name</label>
		<input type="text" name="emp_name"  value="{{$employee->empname}}">
		@if($errors->has('emp_name'))
			<span class="text-danger">
				<strong> {{$errors->first('emp_name')}} </strong>
			</span>
		@endif <br>

		<label>Password</label>
		<input type="text" name="password">
		@if($errors->has('password'))
			<span class="text-danger">
				<strong> {{$errors->first('password')}} </strong>
			</span>
		@endif <br>

        <label>First Name</label>
		<input type="text" name="f_name"  value="{{$bankuser->firstname}}">
		@if($errors->has('f_name'))
			<span class="text-danger">
				<strong> {{$errors->first('f_name')}} </strong>
			</span>
		@endif <br>

		<label>Last Name</label>
		<input type="text" name="l_name"  value="{{$bankuser->lastname}}">
		@if($errors->has('l_name'))
			<span class="text-danger">
				<strong> {{$errors->first('l_name')}} </strong>
			</span>
		@endif <br>



		<label>Gender</label>
		<input type="radio" name="gender" id="gen" value="Male" @if ($bankuser->gender == "Male") checked @endif> Male
		<input type="radio" name="gender" id="gen" value="Female" @if ($bankuser->gender == "Female") checked @endif> Female
		<input type="radio" name="gender" id="gen" value="Others" @if ($bankuser->gender == "Others") checked @endif> Others

		@if($errors->has('gender'))
			<span class="text-danger">
				<strong> {{$errors->first('gender')}} </strong>
			</span>
		@endif 
		
		<br>
		<br>

		<label> Date of Birth </label>
		<input type="date" name="dob"  value="{{$bankuser->dateofbirth}}">
		@if($errors->has('dob'))
			<span class="text-danger">
				<strong> {{$errors->first('dob')}} </strong>
			</span>
		@endif <br>

		<label> Phone </label>
		<input type="text" name="phone"  value="{{$bankuser->phone}}">
		@if($errors->has('phone'))
			<span class="text-danger">
				<strong> {{$errors->first('phone')}} </strong>
			</span>
		@endif <br>


		<label>Email</label>
		<input type="text" name="email"  value="{{$bankuser->email}}">
		@if($errors->has('email'))
			<span class="text-danger">
				<strong> {{$errors->first('email')}} </strong>
			</span>
		@endif <br>

        <label>Nid No</label>
		<input type="text" name="nid"  value="{{$bankuser->nid}}">
		@if($errors->has('nid'))
			<span class="text-danger">
				<strong> {{$errors->first('nid')}} </strong>
			</span>
		@endif <br>
		<input type="submit" name="submit" value="submit"> 
    </form>
</body>
</html>
@endsection