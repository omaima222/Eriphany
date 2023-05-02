

let card = document.getElementById("card")
let question = document.getElementById("question")
let options = document.getElementsByClassName('option')
let nextButton = document.getElementById("next")
let audios = document.getElementsByClassName('player')
let results = document.getElementById('results')
let index = 0

let choice = 0

function start(){
    index=0
    display(questions[index])
}

function display(Q){
    question.innerHTML=Q.question
    for(let i=0;i<4;i++){
        if(Q.options[i].option.includes(".mp3")){
            audios[i].setAttribute('src', "audios/quiz/"+Q.options[i].option)
            options[i].innerHTML="play"
        }else{ 
            options[i].innerHTML=Q.options[i].option
            audios[i].setAttribute('src', "")
        }
    }
}

function next(){
    for(let j=0;j<4;j++){
        audios[j].pause()
        if(options[j].classList.contains('choice')){
            choice = j
        }
    }
    countPoints(questions[index].options[choice])
    if(index<questions.length-1){
        for(let i=0;i<4;i++){
            options[i].classList.remove('choice');
        };
        index++;
        display(questions[index])
        nextButton.style.display="none"
    }
    else{
        showResults()
    }  
}

function countPoints(Q){
  for(i=0;i<Q.genres.length;i++){
    for(j=0;j<genres.length;j++){
        if(Q.genres[i].genre==genres[j].genre) genres[j].points++
    }
  }
  console.log(genres[0].genre+' : '+genres[0].points)

}


function showResults(){
    card.style.display='none'
    nextButton.innerHTML="bye"
  
    // for(let v=0;v<genres.length;v++){
    //     results.innerHTML+="<br>"+genres[v].genre +" = "+genres[v].points
    // }

    let maxPoints = Math.max(...genres.map((genre) => genre.points));
    let topGenres = genres.filter((genre) => genre.points === maxPoints).map((genre) => genre.genre);
    let recosInResults = document.getElementById('recosInResults');

    for(let i=0;i<topGenres.length;i++){
        let AllRecosInGenre=[]
        for(let j=0;j<recommendations.length;j++){
            if(recommendations[j].genre == topGenres[i] ){
                AllRecosInGenre.push(recommendations[j])
            }
        }
        let randomIndex = Math.floor(Math.random() * AllRecosInGenre.length);
        let randomReco = AllRecosInGenre[randomIndex];

        let littleReco = document.createElement('div')
        littleReco.classList.add('littleReco');
        recosInResults.appendChild(littleReco);

        let song = document.createElement('audio');
        song.setAttribute('src', 'audios/recommendations/'+randomReco.genre+'/'+randomReco.song);
        song.setAttribute('type', 'audio/mpeg');
        song.setAttribute('controls', '');
        littleReco.appendChild(song);

        let song_name = document.createElement('span')
        song_name.innerHTML = "Song : "+randomReco.song_name
        littleReco.appendChild(song_name)

        let artist = document.createElement('span')
        artist.innerHTML = "By   : "+randomReco.artist
        littleReco.appendChild(artist)
        console.log(randomReco)

        let genre = document.createElement('span')
        genre.innerHTML = "Genre : "+randomReco.genre
        littleReco.appendChild(genre)

        let recoIdsArr = document.createElement('input');
        recoIdsArr.setAttribute('type', 'hidden')
        recoIdsArr.setAttribute('name', 'recommendations[]')
        recoIdsArr.value = randomReco.id
        document.getElementById('feedBackForm').appendChild(recoIdsArr)

    }

    results.style.display = 'flex'

}


for(let i=0;i<4;i++){
    options[i].addEventListener('click', function(){
        for(let j=0;j<4;j++){
            audios[j].pause()
        }
        for(let j=0;j<4;j++){
            options[j].classList.remove('choice');
        }
        options[i].classList.add("choice")
        if(audios[i].src.includes("mp3")){
            audios[i].load()     
            audios[i].play()     
        } 
        nextButton.style.display="block"
    });
}

start();

nextButton.addEventListener('click', next)




