/**
 * Created by Nadine on 19.07.2017.
 */

$(document).ready(function (){
$(window).ready(function(){
    /* делаем плавное появление */

    $('#cv-education').fadeIn(1000,function(){
        $('#cv-skills').fadeIn(1000,function(){
           /* $('#cv-oskills').fadeIn(1000, function () {
                $('#cv-exp').fadeIn(1000)
            })*/
        })
    });
  //  setTimeout ("$('#cv-education').fadeIn('slow');",1000);
});
    $(window).scroll(function() {
        if ($(this).scrollTop()>=250) {
            // длительность анимации - 'slow'
            // тип анимации -  'linear'
            $('#cv-oskills').fadeIn('slow','linear');
        }
        else {
            // длительность анимации - 'fast'
            // тип анимации -  'swing'
            $('#cv-oskills').fadeOut(1000);
        }
        if ($(this).scrollTop()>=350) {
            // длительность анимации - 'slow'
            // тип анимации -  'linear'
            $('#cv-exp').fadeIn(1000);
        }
        else {
            // длительность анимации - 'fast'
            // тип анимации -  'swing'
            $('#cv-exp').fadeOut(1000);
        }
    });
});