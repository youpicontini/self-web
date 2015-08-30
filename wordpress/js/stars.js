
function setup() {
    createCanvas($( 'body' ).height()/2, $( 'body' ).height()/2);
    fill(0,32);
    noiseDetail(6, 0.5);
}

function draw() {
    noStroke();
    rect(0,0,width,height);

    stroke(255,127);

    for(var n=0; n<1000; n++) {
        var x = noise(n/5.0, n/11.0, frameCount/300.0);
        var y = noise(n/13.0, n/7.0, frameCount/300.0);
        point( x*width, y*height );
    }
}
