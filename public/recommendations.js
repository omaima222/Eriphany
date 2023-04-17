let recommendations = [];

$.ajax({
    url: route('getRecommendations'),
    method: 'GET',
    dataType: 'json',
    async: false,
    success: function(data){
        for (var i = 0; i < data.recommendations.length; i++) { 
            recommendations.push({
                'song' : data.recommendations[i].song,
                'song_name' : data.recommendations[i].song_name,
                'artist' : data.recommendations[i].artist,
                'genre' : data.recommendations[i].genre.genre,
            })
        }
    }
});

// console.log(recommendations);
