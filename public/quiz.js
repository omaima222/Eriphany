

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
            audios[i].setAttribute('src', "audios/"+Q.options[i].option)
            options[i].innerHTML="play"
        }else options[i].innerHTML=Q.options[i].option
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
  
    for(let v=0;v<genres.length;v++){
        results.innerHTML+="<br>"+genres[v].genre +" = "+genres[v].points
    }

    let maxPoints = Math.max(...genres.map((genre) => genre.points));
    let topGenres = genres.filter((genre) => genre.points === maxPoints).map((genre) => genre.genre);

    for(let i=0;i<topGenres.length;i++){
        console.log(topGenres[i]);
        for(let j=0;j<recommendations.length;j++){
            console.log(recommendations[j].genre);
            if(recommendations[j].genre == topGenres[i] ){
               console.log(topGenres)
               document.getElementById('genre').innerHTML = recommendations[j].genre
               document.getElementById('song_name').innerHTML = recommendations[j].song_name
               document.getElementById('artist').innerHTML = recommendations[j].artist
            }
        }
    }

    results.style.display = 'block'
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














// let data = [
//     {
//         'question': "test test",
//         'options':[
//             "ach kayn",
//             "ach wa93",
//             "ach sari",
//             "ach hada"
//         ],
//         'genres':[
//             "jazz",
//             "blues , new age , soft rock",
//             "classicals, synthwave",
//             "grunge, dream pop, disco"
//         ]
//     },
//     {
//         'question': "test teeeeeeet",
//         'options':[
//              "ach",
//              "madra",
//              "wach",
//              "daz"
//         ],
//         'genres':[
//             "dream pop, blues, classicals",
//             "grunge, jazz, disco",
//             "new age",
//             "synthwave, soft rock"
//         ]
//     },
//     {
//         'question': "pliz",
//         'options':[
//             "p",
//             "l",
//             "i",
//             "z"
//        ],
//        'genres':[
//         "grunge, classicals",
//         "dream pop, jazz, synthwave",
//         "soft rock, disco , blues",
//         "new age"
//     ]
//     },
//     {
//         'question': "mosik",
//         'options':[
//             "1.mp3",
//             "2.mp3",
//             "3.mp3",
//             "4.mp3"
//         ],
//         'genres':[
//             "new age, classicals",
//             "dream pop, jazz, soft rock",
//             "synthwave, grunge, blues",
//             "disco "
//         ]
//     },
// ]

