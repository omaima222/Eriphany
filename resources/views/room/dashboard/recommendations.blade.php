<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <link rel="stylesheet" href={{url('sass/main.css')}}>
    <title>Document</title>
</head>
<body class="recomBody">
    <div class="theWholeThing">
        <div class="theHeader">
            <h1>Recommendations<span>.eri</span></h1>
            <div class="buttons">
                <button style="cursor: not-allowed">&nbsp;&#9888&nbsp;</button>
               <button>&nbsp;—&nbsp;</button>
               <a href="{{route('dashboard')}}"><button class="closeButton">&nbsp;&#x2715&nbsp;</button></a>
            </div>
        </div>
        <div class="theContent">
            <button id="addReco">+ Add</button>
            @php
            $j=-1
            @endphp
            <div class="recoGenresDiv">
                    @foreach ( $genres as $genre )
                    <div class="recoGenreDiv" style="border: 1px solid black; padding:1rem;">
                        <h1>{{$genre->genre}}</h1>
                        <div class="recosDiv">
                            @for( $i=0;$i<count($recommendations);$i++)
                                @if($recommendations[$i]->genre == $genre)
                                    <div class="recoDiv">
                                        @php
                                        $j++
                                        @endphp 
                                        <img  class="recoImg" src="{{url('sass/images/reco.jpg')}}" alt="">
                                        <span>{{$recommendations[$i]->song_name}}</span>
                                        <span>By:{{$recommendations[$i]->artist}}</span>
                                        {{-- <span>{{$recommendations[$i]->genre->genre}}</span> --}}
                                        <audio class="recoAudio" src="audios/recommendations/{{$recommendations[$i]->genre->genre}}/{{$recommendations[$i]->song}}"></audio>
                                        <button class="playButton" onclick="playAudio({{$j}})">play</button>
                                        {{-- <audio controls>
                                            <source src="audios/recommendations/{{$recommendations[$i]->genre->genre}}/{{$recommendations[$i]->song}}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio> --}}
                                        <div class="buttons">
                                            <button title="Edit"  id="editReco" onclick="editreco({{$recommendations[$i]->id}}, {{$recommendations[$i]}})"><img src="{{url('sass/images/edit.png')}}" alt=""></button>
                                            <form action="{{route('recommendations.destroy', $recommendations[$i]->id)}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button  title="Delete"  onclick="alert('do you really want to delete this element ?')"><img src="{{url('sass/images/trash.png')}}" alt=""></button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            @endfor
                        </div>
                    </div>
                    @endforeach
                </div>
  


    <div id="recommendationModal" class="aForm recoForm">
        <div class="formHead">
            <h5>Add recommendation</h5>
            <button id="x">&nbsp;&#x2715&nbsp;</button>
        </div>    
        <form method="POST" action="{{route('recommendations.store')}}"  enctype="multipart/form-data" data-parsley-validate>
          @csrf
          <div class="inputThing">
            <label for="song_name">song name</label>
            <input name="song_name" type="text" data-parsley-trigger="keyup"  data-parsley-maxlength="50" required>
          </div>
          <div class="inputThing">
            <label for="song">song</label>
            <input type="file" name="song" data-parsley-trigger="keyup" data-parsley-filetype="audio/mp3" required>
          </div>
          <div class="inputThing">
            <label for="artist">artist</label>
            <input name="artist" type="text" data-parsley-trigger="keyup"  data-parsley-maxlength="50" required>
          </div>
          <div class="inputThing">
            <label for="genre">genre</label>
            <select name="genre_id" required>
                <option value='' selected disabled>choose genre</option>
                @foreach($genres as $genre)
                      <option value={{$genre->id}}>{{$genre->genre}}</option>
                @endforeach
            </select>
          </div>
          
          <div class="formFooter">
             <button>add</button>
        </div>
        </form>
    </div>

</body>
</html>

<script>
    let addReco = document.getElementById("addReco")
    let recoModal = document.getElementById("recommendationModal")
    let form = recoModal.querySelector("form")
    let options = form.getElementsByTagName('option');
    
    
    x.addEventListener('click', function(){
        recoModal.style.display="none"
    })
 
    addReco.addEventListener('click', function(){
        form.querySelector('button').innerHTML = "add";

        form.action = '/recommendations';
        if(form.querySelector('input[name=_method]')) form.querySelector('input[name=_method]').remove()
        console.log(form.querySelector('input[name=_method]'))

        form.querySelector('input[name=song_name]').value = ''
        form.querySelector('input[name=artist]').value = ''
        options[0].selected = true
        recoModal.style.display="block"
    })

    function playAudio(i){
        let recoAudio = document.getElementsByClassName('recoAudio')
        let playButton = document.getElementsByClassName('playButton')
        
        if(recoAudio[i].paused){
            for(let j=0;j<recoAudio.length;j++){
                recoAudio[j].pause()
                playButton[j].innerHTML = 'play'
            } 
            playButton[i].innerHTML = 'pause'
            recoAudio[i].play()
        }else{
            recoAudio[i].pause()
            playButton[i].innerHTML = 'play'
        }
    }

    function editreco(id, arr){
        form.querySelector('input[name=song_name]').value = arr.song_name
        form.querySelector('input[name=artist]').value = arr.artist
        for(let i=0;i<options.length;i++){
            if(options[i].value == arr.genre_id){
                options[i].selected = true
            }
        }

        form.querySelector('button').innerHTML = 'edit'


        form.action = '/recommendations/'+ id        
        let methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'PUT');
            form.appendChild(methodInput);
  

        recoModal.style.display="block"
        console.log();
    }
   
</script>