<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eriphany</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href={{url('mymain.css')}}>
    
    </head>
    <body>
        <div></div>
        <div class="card" id="card">
            <h1 class="question" id="question">question</h1>
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
        </div>
        <button id="next">next</button>
        
    </body>
    <div id="results">

            <h1>YOUR RESULT</h1>
            <div id="recosInResults">

            </div>
            <div >
                <h1>HOWDY</h1><span><button id="x">x</button></span>
                <form method="POST" action="{{route('postFeedback')}}" id="feedBackForm" data-parsley-validate>
                  @csrf
                    <div>
                        <label for="song">song</label>
                        <input type="text" name="song" data-parsley-trigger="keyup"  data-parsley-maxlength="50" required>
                    </div>
                    <div>
                        <label for="artist">artist</label>
                        <input type="text" name="artist" data-parsley-trigger="keyup"  data-parsley-maxlength="50" required>
                    </div>   
                    <div>
                        <label for="note">note</label>
                        <input type="text" name="note" data-parsley-trigger="keyup"  data-parsley-maxlength="100" required>
                    </div>                     
                    <div>
                        <label for="ranking">ranking</label>
                        <input type="number" name="ranking" data-parsley-trigger="keyup"  data-parsley-max="5" required>
                    </div>            
                  <button>add</button>
                </form>
            </div>
    </div>

</html>
@routes
<script src={{url('questions.js')}}></script>
<script src={{url('recommendations.js')}}></script>
<script src={{url('genres.js')}}></script>
<script src={{url('quiz.js')}}></script>
