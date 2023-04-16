let questions = [];

$.ajax({
    url: route('questions'),
    method: 'GET',
    dataType: 'json',
    async: false,
    success: function(data){
        for (var i = 0; i < data.questions.length; i++) { 
            let options = [];
            options.push({'option': data.questions[i].option1[0].option , 'genres' : data.questions[i].option1[0].genres})
            options.push({'option': data.questions[i].option2[0].option , 'genres' : data.questions[i].option2[0].genres})
            options.push({'option': data.questions[i].option3[0].option , 'genres' : data.questions[i].option3[0].genres})
            options.push({'option': data.questions[i].option4[0].option , 'genres' : data.questions[i].option4[0].genres})
            questions.push({
                'question': data.questions[i].question,
                'options' : options
            });
        }
    }
});

console.log(questions[19])
