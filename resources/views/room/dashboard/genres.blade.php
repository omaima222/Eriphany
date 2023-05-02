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
<body class="genresBody">
    <div class="theWholeThing">
        <div class="theHeader">
            <h1>Genres<span>.eri</span></h1>
            <div class="buttons">
                <button style="cursor: not-allowed">&nbsp;&#9888&nbsp;</button>
               <button>&nbsp;—&nbsp;</button>
               <a href="{{route('dashboard')}}"><button class="closeButton">&nbsp;&#x2715&nbsp;</button></a>
            </div>
        </div>
        <div class="theContent">
                <button id="addGenre">+ Add</button>
                <div class="genresDiv">
                    @foreach( $genres as $genre )
                        <div class="genreDiv">
                            @php 
                            if(strlen($genre->genre)>15){
                                $sgenre = substr($genre->genre, 0, 15)."...";
                            }else $sgenre = $genre->genre
                            @endphp
                            <span title="{{$genre->genre}}">{{$sgenre}}</span>
                            <div class="buttons">
                                <button title="Edit" id="editGenre" onclick="edittGenre({{$genre->id}}, '{{$genre->genre}}')"><img src="{{url('sass/images/edit.png')}}" alt=""></button>
                                <form action="{{route('genres.destroy', $genre->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button  title="Delete"  onclick="alert('do you really want to delete this element ?')"><img src="{{url('sass/images/trash.png')}}" alt=""></button>
                                </form>
                            </div>
                        </div>

                    @endforeach
                </div>
        </div>
    </div>
</body>

<div id="genreModal" class="aForm genreForm">
  
    <div class="formHead">
        <h5>Add genre</h5>
        <button id="x">&nbsp;&#x2715&nbsp;</button>
    </div>    
    <form method="POST" action="{{route('genres.store')}}" data-parsley-validate>
      @csrf
        <div class="inputThing">
            <label for="genre">Genre name</label>
            <input name="genre" type="text" data-parsley-trigger="keyup"  data-parsley-maxlength="30" data-parsley-pattern="^[^/\\]*$" required>
        </div>
        <div>
        <div class="formFooter">
            <button>Add</button>
        </div>
      </div>
    </form>
</div>


</html>

<script>
    let addGenre = document.getElementById("addGenre")
    let genreModal = document.getElementById('genreModal')
    let editGenre = document.getElementById('editGenre')
    let x=document.getElementById('x')
    let form = genreModal.querySelector('form');

    x.addEventListener('click', function(){
        genreModal.style.display="none"
    })


    addGenre.addEventListener('click', function(){
        form.querySelector('button').innerHTML = "add";
        genreModal.querySelector('h5').innerHTML = "Add genre"

        form.action = '/genres';
        if(form.querySelector('input[name=_method]')) form.querySelector('input[name=_method]').remove()
        console.log(form.querySelector('input[name=_method]'))

        form.querySelector('input[name=genre]').value = '';
        genreModal.style.display="block"
    })


    function edittGenre(id, name) {
        form.action = '/genres/' + id; 
        form.querySelector('input[name=genre]').value = name;
        form.querySelector('button').innerHTML = "edit";
        genreModal.querySelector('h5').innerHTML = "Edit genre"

        let methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'PUT');
            form.appendChild(methodInput);
  
        genreModal.style.display = 'block';
    }

</script>