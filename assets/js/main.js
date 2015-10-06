$(document).ready(function() {
    var location = window.location.pathname; //get Current link
    // var $currentNumber = $('.number.active');
    $('.number').hover(function() {
        // console.log('a');
        $('.number').removeClass('active');
    });

    $('.number').mouseleave(function() {
        // console.log('a');
        console.log('[data-link="' + location + '"]');
        $('[data-link="' + location + '"]').addClass('active');
    });

    //Check if portrait ou landscape
    // if (window.innerHeight > window.innerWidth) {
    //     alert("Please use Landscape!");
    // }

    $(window).resize(function(){
    	checkOrientation();
    });

    checkOrientation();

    function checkOrientation() {
        if (window.innerHeight > window.innerWidth) {
            $('body').addClass('noLandscape');
        } else{
            $('body').removeClass('noLandscape');
        }
    }

});