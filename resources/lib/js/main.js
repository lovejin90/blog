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
/*menu*/
$(function(){
    var burger = $('.mobile-menu .menu-box .menu-ui');
    burger.each(function(index){
        var $this = $(this);
        $this.on('click', function(e){
            e.preventDefault();
            $(this).toggleClass('active');
            $('.menu').toggleClass('active');
            $(this).find('span').toggleClass('active');
        })
    });
});