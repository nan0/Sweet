$(document).ready(function() {
    $('#hashtag').on('submit', function() {
        searchTweets();
        return false;
    });
});

function searchTweets()
{
    if ($('[name=track]').val() != null) {
        $('.presentation').slideUp('slow');
        $.ajax({
            type:'GET',
            data:$('#hashtag').serialize(),
            dataType:'json',
            url:'twitter/tweets.get'
        }).done(function (data) {
                //TODO DISPLAY TWEETS
            });
    }
}