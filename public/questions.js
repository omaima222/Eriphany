let questions = [];

$.ajax({
    url: route('getQuestions'),
    method: 'GET',
    dataType: 'json',
    async: false,
    success: function(data){
        for (var i = 0; i < data.questions.length; i++) { 
            let options = [];
            options.push({'option': data.questions[i].option1.option , 'genres' : data.questions[i].option1.genres})
            options.push({'option': data.questions[i].option2.option , 'genres' : data.questions[i].option2.genres})
            options.push({'option': data.questions[i].option3.option , 'genres' : data.questions[i].option3.genres})
            options.push({'option': data.questions[i].option4.option , 'genres' : data.questions[i].option4.genres})
            questions.push({
                'question': data.questions[i].question,
                'options' : options
            });
        }
    }
});

// console.log(questions[0].options[0])
