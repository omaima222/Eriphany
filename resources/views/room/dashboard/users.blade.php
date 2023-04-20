<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href={{url('mymain.css')}}>
    <title>Document</title>
</head>
<body>

    @foreach ($users as $user)
        <div class="feedback">
            <h1>User name :{{$user->name}}</h1>
            <h3>User email :{{$user->name}}</h3>
            <h3>acc created  :{{$user->created_at}}</h3>
            <button><a href="{{route('feedbacks', $user->id)}}">Feedbacks</a></button>
            <form action="{{route('deleteAccount', $user->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button>delete This Acc</button>
            </form>
        </div>
    @endforeach

</body>
</html>
