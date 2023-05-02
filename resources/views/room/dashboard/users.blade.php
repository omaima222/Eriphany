<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href={{url('sass/main.css')}}>
    <title>Document</title>
</head>
<body class="usersBody">
   <div class="theWholeThing">
        <div class="theHeader">
            <h1>Users<span>.eri</span></h1>
            <div class="buttons">
                <button style="cursor: not-allowed">&nbsp;&#9888&nbsp;</button>
            <button>&nbsp;—&nbsp;</button>
            <a href="{{route('dashboard')}}"><button class="closeButton">&nbsp;&#x2715&nbsp;</button></a>
            </div>
        </div>
        <div class="theContent">
            <div class="usersDiv">
                @foreach ($users as $user)
                    <div class="userDiv">
                        <div class="userDivHead">
                            <img class="pfp" src="{{url('sass/images/pfp.jpg')}}" alt="">
                        </div>
                        <div class="info">
                            <p>Name</p><span>{{$user->name}}</span>
                        </div>
                        <div class="info">
                            <p>Email</p><span>{{$user->email}}</span>
                        </div>
                        <div class="info">
                            <p>Created in</p><span>{{$user->created_at->format('M j/ Y . g:i a')}}</span>
                        </div>
                        <div class="buttons">
                            <button class="feedback"><a href="{{route('feedbacks', $user->id)}}">View feedbacks</a></button>
                            <form action="{{route('deleteAccount', $user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button  title="Delete this Account"  onclick="alert('do you really want to delete this element ?')"><img src="{{url('sass/images/trash.png')}}" alt=""></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
   </div>
</body>
</html>
