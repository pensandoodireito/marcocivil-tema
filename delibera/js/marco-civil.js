jQuery(function($){
    var stickyTop = $('#stick-sidebar').offset().top;
    var stickWidth = $('#stick-sidebar').width();

    $(window).scroll(function(){ // scroll event

        var windowTop = $(window).scrollTop(); // returns number

        if (stickyTop < windowTop) {
            $('#stick-sidebar').css({ position: 'fixed', width: stickWidth / 2, top: 40, right: 10});
        }
        else {
            $('#stick-sidebar').css({'position': 'relative', width: "100%", top: 0, right: 0});
        }
    });
});