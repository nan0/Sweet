$(document).ready(function() {
        $('#hashtag').on('submit', function() {
        searchTweets();
        return false;
    });
});

function searchTweets()
{
    /*$.ajax({
        type: 'POST',
        data: $('#track').serialize().replace("#",""),
        dataType: 'json',
        url: 'https://stream.twitter.com/1.1/statuses/filter.json'
    }).done(function ( data ) {
            $('.jumbotron').slideUp();
            //TODO UPDATE SCREEN
    });*/
    $('.jumbotron').slideUp();
}