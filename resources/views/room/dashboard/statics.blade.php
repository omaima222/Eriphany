<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Document</title>
</head>
<body>
     
    <div>
        <h1>Questions</h1>
        <h2>{{$questions_count}}</h2>
    </div>

    <div>
        <h1>Genres</h1>
        <h2>{{$genres_count}}</h2>
    </div>

    <div>
        <h1>Users</h1>
        <h2>{{$users_count}}</h2>
    </div>

    <div>
        <h1>Feedbacks</h1>
        <h2>{{$feedbacks_count}}</h2>
    </div>
</body>
</html>