/*
     __ ______  _   _____________   ______
    / //_/ __ \/ | / /_  __/  _/ | / /  _/
   / ,< / / / /  |/ / / /  / //  |/ // /
  / /| / /_/ / /|  / / / _/ // /|  // /
 /_/ |_\____/_/ |_/ /_/ /___/_/ |_/___/
                                 paris
 */


$( document ).ready(function() {
    $('.logo, .logo2, title').shuffleLetters();
    $("body>div").delay(500).fadeIn(500);
    $( "#infos-xs" ).click(function() {
        $("body>div").delay(500).fadeIn(500);
    });
    $('.title-project').delay(1500).fadeIn(2500);
    $('.page-fadeOut').click(function (e) {
        e.preventDefault();                   // prevent default anchor behavior
        var goTo = this.getAttribute("href"); // store anchor href
        $("body>div").fadeOut(500);
        setTimeout(function(){
            window.location = goTo;
        },500);
    });
    $( ".infos-xs" ).click(function() {
        if ($("#infos-xs-more").is(':visible')){
            $("#infos-xs-more").fadeOut(600);
        }
        else{
            if ($("#contact-xs-more").is(':visible')){
                $("#contact-xs-more").fadeOut(300);
                $("#infos-xs-more").delay(300).fadeIn(300);
            }
            else{
                $("#infos-xs-more").fadeIn(600);
            }

        }
    });
    $( ".contact-xs" ).click(function() {
        if ($("#contact-xs-more").is(':visible')){
            $("#contact-xs-more").fadeOut(600);
        }
        else{
            if ($("#infos-xs-more").is(':visible')){
                $("#infos-xs-more").fadeOut(300);
                $("#contact-xs-more").delay(300).fadeIn(300);
            }
            $("#contact-xs-more").fadeIn(600);
        }
    });

    /*$('.logo').okshadow({
        color: 'white',
        textShadow: true,
        xMax: 5,
        yMax: 5,
        fuzzMin: 0,
        fuzzMax: 0,
        downwards:true
    });*/
});
