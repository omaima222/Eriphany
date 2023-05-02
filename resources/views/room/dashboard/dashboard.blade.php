<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{url('sass/main.css')}}>

</head>
<body class="dashboardBody">
    <div class="dashboardScreen">
        <div title="Users" class="screenButtonDiv">
            <button><a href="{{route('users')}}"><img src="sass/images/feedbacks.png" alt=""></a></button>
            <span>Users</span>
        </div>
        <div  title="Genres"  class="screenButtonDiv">
            <button><a href="{{route('genres.index')}}"><img src="sass/images/genres.png" alt=""></a></button>
            <span>Genres</span>
        </div>        
        <div title="Questions" class="screenButtonDiv">
            <button><a href="{{route('questions.index')}}"><img src="sass/images/questions.png" alt=""></a></button>
            <span>Questions</span>
        </div>
        <div title="Recommendations" class="screenButtonDiv">
            <button><a href="{{route('recommendations.index')}}"><img src="sass/images/recommendations.png" alt=""></a></button>
            <span>Recomme..</span>
        </div>
        <div title="Statics" class="screenButtonDiv">
            <button><a href="{{route('statics')}}"><img src="sass/images/statics.png" alt=""></a></button>
            <span>Statics</span>
        </div>
    </div>
</body>
</html>