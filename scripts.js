$(function(){
    var windowH = $(window).height();
    var wrapperH = $('#wrapper').height();
    if(windowH > wrapperH) {
        $('#wrapper').css({'height':($(window).height())+'px'});
    }
    $(window).resize(function(){
        var windowH = $(window).height();
        var wrapperH = $('#wrapper').height();
        var differenceH = windowH - wrapperH;
        var newH = wrapperH + differenceH;
        var truecontentH = $('#truecontent').height();
        if(windowH > truecontentH) {
            $('#wrapper').css('height', (newH)+'px');
        }

    })
});
