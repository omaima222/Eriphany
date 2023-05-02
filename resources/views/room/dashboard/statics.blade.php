<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href={{url('sass/main.css')}}>

    <title>Document</title>
</head>
<body class="staticsBody">
    <div class="theWholeThing">
        <div class="theHeader">
            <h1>Statics<span>.eri</span></h1>
            <div class="buttons">
                <button style="cursor: not-allowed">&nbsp;&#9888&nbsp;</button>
               <button>&nbsp;—&nbsp;</button>
               <a href="{{route('dashboard')}}"><button class="closeButton">&nbsp;&#x2715&nbsp;</button></a>
            </div>
        </div>
        <div class="theContent">
            <div class="staticsCards">
                <div class="staticsCard">
                    <span>Questions</span>
                    <span>{{$questions_count}}</span>
                </div>
                <div class="staticsCard">
                    <span>Genres</span>
                    <span>{{$genres_count}}</span>
                </div>
                <div class="staticsCard">
                    <span>Users</span>
                    <span>{{$users_count}}</span>
                </div>
                <div class="staticsCard">
                    <span>Feedbacks</span>
                    <span>{{$feedbacks_count}}</span>
                </div>
            </div>
        </div>
</body>
</html>