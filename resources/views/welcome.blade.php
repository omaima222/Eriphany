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
        <div id="results"></div>
        {{-- <audio id="player" src="gorillaz chill playlist.mp3" ></audio>
        <button onclick="document.getElementById('player').play()">Play</button> --}}

    </body>
</html>
@routes
<script src={{url('questions.js')}}></script>
<script src={{url('genres.js')}}></script>
<script src={{url('mymain.js')}}></script>


