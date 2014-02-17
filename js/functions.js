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

    $('#mn-about').addClass('active');

    $('.box ul li a').hover(function(){
        $(this).parents('li').find('a').addClass('active');
        $(this).parents('li').siblings().find('a').removeClass('active');
    });

    $('.box ul').mouseleave(function(){
        $('.box ul li a').removeClass('active');
        $('#mn-about').addClass('active');
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

    $("#bt-home").click(function(event){
        $('#box').removeClass('zoomIn');
        $('#about, #social').removeClass('active');
        setTimeout(function(){
            $('#box').removeClass('minimized');
            setTimeout(function(){
                $('#box').removeClass('fullHeight');
                setTimeout(function(){
                    $('#box').removeClass('square');
                },600);
            },600);
        },600);
        return false;
    });

    $("#mn-about").click(function(event){
        $('#box').removeClass('zoomIn');
        $('#box').addClass('square');
        $('#social, #mn-about').addClass('active');
        setTimeout(function(){
            $('#box').addClass('fullHeight');
            setTimeout(function(){
                $('#box').addClass('minimized');
                $('#about').addClass('active');
                setTimeout(function(){
                    loaded();
                },600);
            },600);
        },600);
        return false;
    });

});