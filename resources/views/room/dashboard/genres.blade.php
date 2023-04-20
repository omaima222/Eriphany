<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <link rel="stylesheet" href={{url('mymain.css')}}>
    <title>Document</title>
</head>
<body>

    <button id="addGenre">Add</button>
    <h1>genres</h1>
    @foreach( $genres as $genre )
        
        <div>
            <span>{{$genre->genre}}</span>
      
            <button id="editGenre" onclick="edittGenre({{$genre->id}}, '{{$genre->genre}}')">edit</button>
            <form action="{{route('genres.destroy', $genre->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button>delete</button>
            </form>
        </div>

    @endforeach

</body>

<div id="genreModal" class="modal">
    <h1>HOWDY</h1><span><button id="x">x</button></span>
    <form method="POST" action="{{route('genres.store')}}" data-parsley-validate>
      @csrf
      <input name="genre" type="text" data-parsley-trigger="keyup"  data-parsley-maxlength="30" data-parsley-pattern="^[^/\\]*$" required>
      <button>add</button>
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

        let methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'PUT');
            form.appendChild(methodInput);
  
        genreModal.style.display = 'block';
    }

</script>