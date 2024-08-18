<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@include('layout.bootstrap')
<body>
<div class="container col-md-12">
    <div class="row col-md-6 my-3">
        <a href="{{route('register')}}" class="btn btn-primary btn-sm col-md-3">Register</a>
        <a href="{{route('login')}}" class="btn btn-primary btn-sm  ms-2 col-md-3">Login</a>
    </div>
</div>
</body>
</html>