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
    $( ".contact" ).click(function() {
        if ($(".contact_sup").is(':visible')){
            $(".contact_sup").hide("slow");
        }
        else{
            $(".contact_sup").show("slow");
        }
    });

    $( ".about" ).click(function() {
        if ($(".about_sup").is(':visible')){
            $(".about_sup").hide("slow");
        }
        else{
            $(".about_sup").show("slow");
        }
    });
});


$(function(){

    // container is the DOM element;
    // userText is the textbox

    $(".presentation").shuffleLetters();

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