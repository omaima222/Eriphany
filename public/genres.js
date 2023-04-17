let genres = [];

$.ajax({
    url: route('getGenres'),
    method: 'GET',
    dataType: 'json',
    async: false,
    success: function(data){
        for (var i = 0; i < data.genres.length; i++) { 
                   genres.push({'genre': data.genres[i].genre , 'points' : 0 })
        }
    }
});

