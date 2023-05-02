<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eriphany</title>
        <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href={{url('sass/main.css')}}>
    
    </head>
    <body class="quizBody">
        <div></div>
        <div class="card" id="card">
            <span class="question" id="question">question</span>
            <div class="options">
                <audio class="player" src="" ></audio>
                <audio class="player" src="" ></audio>
                <audio class="player" src="" ></audio>
                <audio class="player" src="" ></audio>

                <button class="option">option</button>
                <button class="option">option</button>
                <button class="option">option</button>
                <button class="option">option</button>
            </div>
            <div class="cardFoot">
                <button id="next">next</button>
            </div>
        </div>
        
    </body>
    <div id="results">
            <h1>Your Results</h1>
            <div id="recosInResults">
            </div>
            <div class="aForm">
                <div class="formHead">
                    <h5>Your feedback</h5>
                </div>    
                <form method="POST" action="{{route('postFeedback')}}" id="feedBackForm" data-parsley-validate>
                  @csrf
                    <div class="inputThing">
                        <label for="song">song</label>
                        <input type="text" name="song" data-parsley-trigger="keyup"  data-parsley-maxlength="50" required>
                    </div>
                    <div class="inputThing">
                        <label for="artist">artist</label>
                        <input type="text" name="artist" data-parsley-trigger="keyup"  data-parsley-maxlength="50" required>
                    </div>   
                    <div class="inputThing">
                        <label for="note">note</label>
                        <input type="text" name="note" data-parsley-trigger="keyup"  data-parsley-maxlength="100" required>
                    </div>                     
                    <div class="inputThing">
                        <label for="ranking">ranking</label>
                        <input type="number" name="ranking" data-parsley-trigger="keyup"  data-parsley-max="5" required>
                    </div>         
                    <div class="formFooter">
                       <button>Add</button>
                    </div>   
                </form>
            </div>
    </div>

</html>
@routes
<script src={{url('questions.js')}}></script>
<script src={{url('recommendations.js')}}></script>
<script src={{url('genres.js')}}></script>
<script src={{url('quiz.js')}}></script>
