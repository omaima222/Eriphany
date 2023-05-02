<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('sass/main.css')}}">
</head>
<body class="roomBody">
    <button class="PlayButton"><a href="{{route('quiz')}}">Play</a></button>
    @if(Auth()->user()->is_admin == 1)
    <button class="DashButton"><a href="{{route('dashboard')}}">Dashboard</a></button>

    @endif
    <button class="FilesButton"><a href="{{route('MyFiles')}}">My Files</a></button>
</body>
</html>