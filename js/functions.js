document.addEventListener('touchmove', function(e){e.preventDefault();}, false);

$(document).ready(function(){

    var myScroll;

    function loaded() {
        myScroll = new IScroll('#about', {mouseWheel: true});
    }

    // count to 73

    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }

    // taget blank

    $('a[rel=external]').attr('target', '_blank');

    // window load

    $(window).load(function(){
        lineHeight();
        setTimeout(function(){
            $('.loading').fadeOut(600);
            $('#box').removeClass('zoomIn');
            $('.timer').each(count);
        },1000);
    });

    // window resize

    $(window).resize(function(){
        lineHeight();
    });

    // line-height of social icons

    function lineHeight() {
        $('.social li a').css('line-height',$('.social li').height()+'px');
    }

    // menu

    $('.box ul li:first-child').addClass('active');

    $('.box ul li a').hover(function(){
        $(this).parents('li').addClass('active');
        $(this).parents('li').siblings().removeClass('active');
    });

    $("#about").mouseover(function(){
        $(this).removeClass('grab');
    }).mousedown(function(){
        $(this).addClass('grabbing');
    }).mouseup(function(){
        $(this).removeClass('grabbing');
    });

    // route: about

    $('.crop').fullscreenBackground();

    $("[href='#!/about']").click(function(event){
        $('#box').removeClass('zoomIn');
        $('#box').addClass('square');
        $('#social').addClass('active');
        setTimeout(function(){
            $('#box').addClass('fullHeight');
            $('#box').addClass('minimized');
            setTimeout(function(){
                $('#about').addClass('active');
                setTimeout(function(){
                    loaded();
                },600);
            },900);
        },600);
    });

    // trigger

    switch(location.hash){
        case '#!/about':
            $("[href='#!/about']").trigger('click');
        break;
    }

});