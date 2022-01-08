<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layouts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    @section('navbar')
    <a class="btn btn-primary" href="{{route('employee.dash')}}">Home</a>
    <a class="btn btn-danger" href="{{route('logout')}}">LogOut</a>
    <a class="btn btn-primary" href="{{route('employee.loanrqsts')}}">LoanRequests</a>
    <a class="btn btn-primary" href="{{route('employee.info')}}">AccounrRequests</a>
    <a class="btn btn-primary" href="{{route('employee.news')}}">CreateNews</a>
    @show
    <div class='container'>
        @yield('content')
    </div>
    
</body>
</html>