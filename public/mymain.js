

let card = document.getElementById("card")
let question = document.getElementById("question")
let options = document.getElementsByClassName('option')
let nextt = document.getElementById("next")

let index = 0
let data = [
    {
        'question': "test test",
        'options':[
             "ach kayn",
             "ach wa93",
            "ach sari",
            "ach hada"
        ]
    },
    {
        'question': "test teeeeeeet",
        'options':[
             "ach",
             "madra",
             "wach",
             "daz"
        ]
    },
    {
        'question': "pliz",
        'options':[
            "p",
            "l",
            "i",
            "z"
       ]
    },
]


function start(){
    index=0
     display(data[index])
}
start();
function display(Q){
    question.innerHTML=Q.question
    for(let i=0;i<4;i++){
        options[i].innerHTML=Q.options[i]
    }
}

function next(){
    if(index<data.length-1){
        for(let i=0;i<4;i++){
            options[i].classList.remove('choice');
        };
        index++;
        display(data[index])
        nextt.style.display="none"
    }
    else{
        card.style.display='none'
        nextt.innerHTML="bye"
    }
  
}

for(let i=0;i<4;i++){
    options[i].addEventListener('click', function(){
        for(let i=0;i<4;i++){
            options[i].classList.remove('choice');
        };
        options[i].classList.add("choice")
        nextt.style.display="block"
    })
}




nextt.addEventListener('click', next)