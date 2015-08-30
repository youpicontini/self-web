var location;
var velocity;
var gravity = 0.03;
var damping = 0.005;
function setup(){
    createCanvas($('body').width(),$('body').width());
    ellipseMode(CENTER);
    smooth();
    noStroke();
    location = new PVector[500];
    velocity = new PVector[location.length];
    //pigment = new color[location.length];
    for(var i=0;i<location.length;i++){
        location[i] = new PVector(random(0,width),random(0,height));
        velocity[i] = new PVector(random(-1,1),random(-1,1));
        //pigment[i] = color(random(0,255),random(0,255),random(0,255));
    }
    mouseX = width/2;
    mouseY = height/2;
    background(0);
}
function draw(){
    fill(0,16);
    rect(0,0,width,height);
    var mouse = new PVector(mouseX,mouseY);
    for(var i=0;i<location.length;i++){
        fill(255);
        ellipse(location[i].x,location[i].y,2,2);
        location[i].add(velocity[i]);
        var relativeLocation = PVector.sub(location[i],mouse);
        var forceMagnitude = gravity/sq(relativeLocation.mag());
        forceMagnitude = constrain(forceMagnitude,0,1);
        relativeLocation.normalize();
        velocity[i].sub(PVector.mult(relativeLocation,gravity));
        velocity[i].mult(1-damping);
        velocity[i].add(PVector.mult(new PVector(random(-1,1),random(-1,1)),0.1));
    }
}
