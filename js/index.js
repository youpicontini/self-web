/*
     __ ______  _   _____________   ______
    / //_/ __ \/ | / /_  __/  _/ | / /  _/
   / ,< / / / /  |/ / / /  / //  |/ // /
  / /| / /_/ / /|  / / / _/ // /|  // /
 /_/ |_\____/_/ |_/ /_/ /___/_/ |_/___/
                                 paris
 */



// target elements with the "draggable" class
interact('.draggable')
    .draggable({
        // enable inertial throwing
        inertia: true
        // keep the element within the area of it's parent
        ,

        // call this function on every dragmove event
        onmove: function (event) {
            var target = event.target,
            // keep the dragged position in the data-x/data-y attributes
                x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
                y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

            // translate the element
            target.style.webkitTransform =
                target.style.transform =
                    'translate(' + x + 'px, ' + y + 'px)';

            // update the posiion attributes
            target.setAttribute('data-x', x);
            target.setAttribute('data-y', y);
        }

    });

$( document ).ready(function() {
    window.setInterval(function(){
        var rand = Math.floor((Math.random() * 7) + 1);
        switch(rand) {
            case 1:
                $(".catch_phrase").text("Robots lover");
                break;
            case 2:
                $(".catch_phrase").text("Graphic aesthete");
                break;
            case 3:
                $(".catch_phrase").text("Creative developer");
                break;
            case 4:
                $(".catch_phrase").text("Light maker");
                break;
            case 5:
                $(".catch_phrase").text("Generative addict");
                break;
            case 6:
                $(".catch_phrase").text("Code eater");
                break;
            case 7:
                $(".catch_phrase").text("Cool kid");
                break;
            default:
                $(".catch_phrase").text("Cool kid");
        }
        $(".catch_phrase").shuffleLetters();
    }, 2000); /*20 secs*/

    $( ".contact" ).click(function() {
        if ($(".contact_sup").is(':visible')){
            $(".contact_sup").hide("slow");
        }
        else{
            $(".contact_sup").show("slow");
            if ($(".about_sup").is(':visible')){
                $(".about_sup").hide("slow");
            }
        }
    });
    $( ".about" ).click(function() {
        if ($(".about_sup").is(':visible')){
            $(".about_sup").hide("slow");
        }
        else{
            $(".about_sup").show("slow");
            if ($(".contact_sup").is(':visible')){
                $(".contact_sup").hide("slow");
            }
        }
    });
    $( ".works" ).click(function() {
        if ($(".works_sup").is(':visible')){
            $(".works").css({"width": "145px"});
            $(".works_sup").hide("slow");
            $(".name_header").hide("slow");
            $(".bloc_catchphrase").hide("slow");
            $(".catch_phrase").hide("slow");
            $(".main").fadeIn(1000);
        }
        else{
            $(".works_sup").show("slow");
            $(".name_header").show("slow").shuffleLetters();
            $(".bloc_catchphrase").show("slow");
            $(".catch_phrase").show("slow");
            $(".catch_phrase").shuffleLetters();
            $(".main").fadeOut(1000);
            $(".works").css({"width": "auto"}).css({"margin-right": "5px"});
        }
    });
});


$(function(){

    // container is the DOM element;
    // userText is the textbox

    $(".presentation").shuffleLetters();
    var rand = Math.floor(Math.random()*2);
    if(rand % 2 == 0){
        $("body").css({"background" : "white"});
        $(".main").css({"border-color" : "black"}).css({"color" : "black"}).css({"box-shadow": "5px 5px 0px black"});
        $(".name span").css({"border-color" : "black"});
        $(".name_header span").css({"border-color" : "black"});
        $(".name_header").css({"color" : "black"});
        $(".catch_phrase").css({"color" : "black"});
        $(".contact").css({"border-color" : "black"}).css({"color" : "black"}).css({"box-shadow": "5px 5px 0px black"});
        $(".about").css({"border-color" : "black"}).css({"color" : "black"}).css({"box-shadow": "5px 5px 0px black"});
        $(".works").css({"border-color" : "black"}).css({"color" : "black"}).css({"box-shadow": "5px 5px 0px black"});
        $(".about").hover().css({"box-shadow": "7px 7px 0px black"});
        $(".contact").hover().css({"box-shadow": "7px 7px 0px black"});
        $(".works").hover().css({"box-shadow": "7px 7px 0px black"});
    }
});




/*

(function() {
    document.onmousemove = handleMouseMove;
    function handleMouseMove(event) {
        var dot, eventDoc, doc, body, pageX, pageY;

        event = event || window.event; // IE-ism

        // If pageX/Y aren't available and clientX/Y are,
        // calculate pageX/Y - logic taken from jQuery.
        // (This is to support old IE)
        if (event.pageX == null && event.clientX != null) {
            eventDoc = (event.target && event.target.ownerDocument) || document;
            doc = eventDoc.documentElement;
            body = eventDoc.body;

            event.pageX = event.clientX +
                (doc && doc.scrollLeft || body && body.scrollLeft || 0) -
                (doc && doc.clientLeft || body && body.clientLeft || 0);
            event.pageY = event.clientY +
                (doc && doc.scrollTop  || body && body.scrollTop  || 0) -
                (doc && doc.clientTop  || body && body.clientTop  || 0 );
        }
        var scaledx, scaledy, widthpage, heightpage;
        widthpage = $( "body").width();
        heightpage = $( "body").height();

        scaledx = ((event.pageX + event.pageY)/2) % 255;
        scaledy = ((event.pageX + event.pageY)/2) % 255;

        $( "body" ).css({"backgroundColor":"rgba("+scaledx+","+scaledy+","+(scaledx+scaledy)/2+",1)"});
    }
})();
*/