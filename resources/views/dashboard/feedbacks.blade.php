<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href={{url('mymain.css')}}>
    <title>Document</title>
</head>
<body>

    <h1>feedbacks</h1>
    @foreach( $feedbacks as $feedback )
        
        <div>
            <h2>{{$feedback->user->name}}</h2>
            <h4>{{$feedback->user->email}}</h4>
             <br><span>song : {{$feedback->song}}</span>
             <br><span>artist :{{$feedback->artist}}</span>
             <br><span>ranking : {{$feedback->ranking}}</span>
      
            <form action="{{route('feedback.destroy', $feedback->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button>delete</button>
            </form>
        </div>

    @endforeach

</body>