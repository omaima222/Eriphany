<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eriphany</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Styles -->
        <link rel="stylesheet" href={{url('mymain.css')}}>
    
    </head>
    <body>
        <form action="{{route('deleteAccount', Auth()->user()->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>deleteMyAcc</button>
        </form>
        <h1>My history</h1>

        @foreach ($feedbacks as $feedback)
            <div class="feedback">
                <h3>AT : {{$feedback->created_at->format('M j/ Y . g:i a')}}</h3>
                <p>note : {{$feedback->note}}</p><br>
                <h4>my song : {{$feedback->song}}</h4><br>
                <h4>artist : {{$feedback->artist}}</h4><br>
                <h4>ranking : {{$feedback->ranking}}</h4><br>

                @foreach($feedback->recommendations as $MyReco)
                        <div>
                            <h5>{{$MyReco->song_name}}</h5>
                            <h5>{{$MyReco->artist}}</h5>
                            <h5>{{$MyReco->genre->genre}}</h5>
                            <audio controls>
                                <source src="audios/recommendations/{{$MyReco->genre->genre}}/{{$MyReco->song}}" type="audio/mpeg">
                              Your browser does not support the audio element.
                            </audio>
                        </div>
                @endforeach
            </div>
        @endforeach
            
    </body>


</html>