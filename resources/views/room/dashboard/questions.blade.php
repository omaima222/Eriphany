<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>

    <link rel="stylesheet" href={{url('mymain.css')}}>
    <title>Document</title>
</head>
<body>

    <button id="addQuestion">Add</button>
    <h1>questions</h1>
    @foreach( $questions as $question )
        
        <div>
            <span>{{$question->question}}</span>
      
            <button id="editGenre" onclick="editQuestion({{$question->id}}, {{$question}})">edit</button>
            <form action="{{route('questions.destroy', $question->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button>delete</button>
            </form>
        </div>

    @endforeach

</body>

<div id="questionModal" class="modal">
    <span>HOWDY</span><span><button id="x">x</button></span>
    <form method="POST" action="{{route('questions.store')}}" data-parsley-validate>
      @csrf
        <div>
            <label for="question">question</label>
            <input name="question" type="text" data-parsley-trigger="keyup"  data-parsley-maxlength="100" required>
        </div>
        <div>
            <label for="option1">option 1</label>
            <input name="option1" type="text" data-parsley-trigger="keyup"  data-parsley-maxlength="50" required>
            @foreach ($genres as $genre)
                <input name="genre1[]" class="genre1" type="checkbox" value={{$genre->id}} required>
                <label for="genre1">{{$genre->genre}}</label>
            @endforeach

        </div>
        <div>
            <label for="option2">option 2</label>
            <input name="option2" type="text" data-parsley-trigger="keyup"  data-parsley-maxlength="50" required>
            @foreach ($genres as $genre)
                <input name="genre2[]" class="genre2" type="checkbox" value={{$genre->id}} required>
                <label for="genre2">{{$genre->genre}}</label>
            @endforeach
        </div>
        <div>
            <label for="option3">option 3</label>
            <input name="option3" type="text" data-parsley-trigger="keyup"  data-parsley-maxlength="50" required>
            @foreach ($genres as $genre)
                <input name="genre3[]"class="genre3"  type="checkbox" value={{$genre->id}} required>
                <label for="genre3">{{$genre->genre}}</label>
            @endforeach
        </div>
        <div>
            <label for="option4">option 4</label>
            <input name="option4" type="text" data-parsley-trigger="keyup"  data-parsley-maxlength="50" required>
            @foreach ($genres as $genre)
                <input name="genre4[]" class="genre4" type="checkbox" value={{$genre->id}} required>
                <label for="genre4">{{$genre->genre}}</label>
            @endforeach
        </div>
      <button>add</button>
    </form>
</div>


</html>

<script>
   
   let addQuestion = document.getElementById('addQuestion')
   let questionModal = document.getElementById('questionModal')
   let form = questionModal.querySelector('form')
   let inputs = form.getElementsByTagName('input')

   addQuestion.addEventListener('click', function(){
        form.querySelector('button').innerHTML = "add";

        form.action = '/questions';
        if(form.querySelector('input[name=_method]')) form.querySelector('input[name=_method]').remove()
        console.log(form.querySelector('input[name=_method]'))

        for(let i=0;i<inputs.length;i++){
            if(inputs[i].type!='hidden'){
                if(inputs[i].type =='checkbox'){
                  inputs[i].checked = false
                }
               else inputs[i].value= " "
            }
        }
        questionModal.style.display = 'block'
   })

    x.addEventListener('click', function(){
        questionModal.style.display="none"
    })

    function editQuestion(id, arr){
        
        for(let i=0;i<inputs.length;i++){
            inputs[i].checked = false
        }

        form.querySelector('input[name=question]').value = arr.question
        form.querySelector('input[name=option1]').value = arr.option1.option
        form.querySelector('input[name=option2]').value = arr.option2.option
        form.querySelector('input[name=option3]').value = arr.option3.option
        form.querySelector('input[name=option4]').value = arr.option4.option

        let option1_genres = form.getElementsByClassName('genre1')
        let option2_genres = form.getElementsByClassName('genre2')
        let option3_genres = form.getElementsByClassName('genre3')
        let option4_genres = form.getElementsByClassName('genre4')

        for(let i=0;i<option1_genres.length;i++){
          for(let j=0;j<arr.option1.genres.length;j++){
            if(option1_genres[i].value == arr.option1.genres[j].id) option1_genres[i].checked = true
          }
        }
    
        for(let i=0;i<option2_genres.length;i++){
          for(let j=0;j<arr.option2.genres.length;j++){
            if(option2_genres[i].value == arr.option2.genres[j].id) option2_genres[i].checked = true
          }
        }

        for(let i=0;i<option3_genres.length;i++){
          for(let j=0;j<arr.option3.genres.length;j++){
            if(option3_genres[i].value == arr.option3.genres[j].id) option3_genres[i].checked = true
          }
        }

        for(let i=0;i<option4_genres.length;i++){
          for(let j=0;j<arr.option4.genres.length;j++){
            if(option4_genres[i].value == arr.option4.genres[j].id) option4_genres[i].checked = true
          }
        }

        form.querySelector('button').innerHTML = "edit";

        form.action = '/questions/'+ id;
        let methodInput = document.createElement('input')
            methodInput.setAttribute('name', '_method')
            methodInput.setAttribute('type', 'hidden')
            methodInput.setAttribute('value', 'PUT')
            form.appendChild(methodInput)

        questionModal.style.display = 'block'
      
    }
</script>