$(function(){
    $(window).scroll( function() {
        var ns = $(".top-area").offset();
        if ($( this ).scrollTop() > 200 ) {
            $('.top-area').fadeIn();
        } else {
            $('.top-area').fadeOut();
        }
    });

    $( '.top' ).click( function() {
        $("body,html").animate( { scrollTop : 0 }, 400 );
        return false;
    });
});