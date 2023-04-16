<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href={{url('mymain.css')}}>
    <title>Document</title>
</head>
<body>

    
    <button id="addReco">Add</button>
    <h1>recommendations</h1>
    @for( $i=0;$i<count($recommendations);$i++ )
        
        <div>
            <span>{{$recommendations[$i]->song_name}}</span>
            <span>{{$recommendations[$i]->artist}}</span>
            <span>{{$recommendations[$i]->genre->genre}}</span>
            {{-- <audio class="recoAudio" src="audios/{{$recommendations[$i]->song}}audios/{{$recommendations[$i]->song}}"></audio>
            <button class="playButton" onclick="playAudio({{$i}})" >play</button> --}}
            <audio controls>
                <source src="audios/{{$recommendations[$i]->song}}" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
            <button id="editReco" onclick="editreco({{$recommendations[$i]->id}}, {{$recommendations[$i]}} )">edit</button>
            <form action="{{route('recommendation.destroy', $recommendations[$i]->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button>delete</button>
            </form>
        </div>

    @endfor


    <div id="recommendationModal" class="modal">
        <h1>HOWDY</h1><span><button id="x">x</button></span>
        <form method="POST" action="{{route('recommendation.store')}}"  enctype="multipart/form-data">
          @csrf
          <div>
            <label for="song_name">song name</label>
            <input name="song_name" type="text">
          </div>
          <div>
            <label for="song">song</label>
            <input type="file" name="song" accept="audio/mpeg3">
          </div>
          <div>
            <label for="artist">artist</label>
            <input name="artist" type="text">
          </div>
          <div>
            <label for="genre">genre</label>
            <select name="genre_id">
                <option value='' selected disabled>choose genre</option>
                      
                @foreach($genres as $genre)
                      <option value={{$genre->id}}>{{$genre->genre}}</option>
                @endforeach
            </select>
          </div>
          
          
          <button>add</button>
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


        form.action = '/recommendation/'+ id        
        let methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'PUT');
            form.appendChild(methodInput);
  

        recoModal.style.display="block"
        console.log();
    }

</script>