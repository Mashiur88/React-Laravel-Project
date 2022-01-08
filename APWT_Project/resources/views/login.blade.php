<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
    <form action="{{route('login')}}" method="post">
    {{csrf_field()}}
    <h3>Login</h3>
    <input type="text" id='user' name="user" placeholder= 'Enter username'><br>
    <input type="password" id='passWord' name="passWord" placeholder= 'Type passWord'><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>