<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('layout.bootstrap')
    <h1>This is dashboard</h1>
    <a href="{{route('logout')}}" class="btn btn-danger btn-sm">Logout</a>
</body>
</html>