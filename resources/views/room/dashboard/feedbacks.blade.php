<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href={{url('sass/main.css')}}>
    <title>Document</title>
</head>
<body class="feedbacksBody">
    <div class="theWholeThing">
        <div class="theHeader">
            <h1>Feedbacks<span>.eri</span></h1>
            <div class="buttons">
                <button style="cursor: not-allowed">&nbsp;&#9888&nbsp;</button>
               <button>&nbsp;—&nbsp;</button>
               <a href="{{route('dashboard')}}"><button class="closeButton">&nbsp;&#x2715&nbsp;</button></a>
            </div>
        </div>
        <div class="theContent">
            @if(count($feedbacks)==0)
               <span class="nothing">Nothing...Yet</span>
            @endif
            <div class="feedbacksDiv">
                    @foreach( $feedbacks as $feedback )
                        <div class="feedbackDiv">
                            <div class="info">
                                <p>Taken at : </p><span>{{$feedback->created_at->format('M j/ Y . g:i a')}}</span>
                            </div>
                            <div class="info">
                            <p>song : </p><span>{{$feedback->song}}</span>
                            </div>
                            <div class="info">
                            <p>artist : </p><span>{{$feedback->artist}}</span>
                            </div>
                            <div class="info">
                            <p>ranking : </p><span>{{$feedback->ranking}}</span>
                            </div>
                            <div class="petiteRecosBorder">
                                <h4>Recommendations</h4>
                                @foreach($feedback->recommendations as $reco)
                                    <div class="petiteReco">
                                        <img  src="{{url('sass/images/petiteReco.jpg')}}" alt="">
                                        <span>{{$reco->song_name}}</span>
                                        <span>By:{{$reco->artist}}</span>
                                    </div>
                                @endforeach
                            </div>
                            <div class="buttons">
                                <form action="{{route('deleteFeedback', [$feedback->user->id,$feedback->id])}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button onclick="alert('sure?')"><img src="{{url('sass/images/trash.png')}}" alt=""></button>
                                </form>
                            </div>
                        </div>

                    @endforeach
            </div>
        </div>
</body>