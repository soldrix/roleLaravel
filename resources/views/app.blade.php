<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="margin: 0">
<div style="width: 100%;background: #605e5e;height: 50px;align-items: center ;color: #ffffff;display: flex;justify-content: space-around">
    <a href="{{url('/home')}}">Home</a>
    <a href="{{url('/testRole')}}">Tester le role</a>
    <form id="logout" action="{{route('logout')}}" method="POST">@csrf</form>
    <a href={{route('logout')}}"" onclick="event.preventDefault();document.getElementById('logout').submit()">logout</a>
</div>

<main style="display: flex;justify-content: center;align-items: center;height: calc( 100vh - 50px);background: #718096">
    @yield('content')
</main>
</body>
</html>
