/**
 * Visualize: Superformula
 * from Form+Code in Design, Art, and Architecture 
 * by Casey Reas, Chandler McWilliams, and LUST
 * Princeton Architectural Press, 2010
 * ISBN 9781568989372
 * 
 * This code was written for Processing 1.2+
 * Get Processing at http://www.processing.org/download
 */

float scaler = 200;
int m = 2;
float n1 = 18;
float n2 = 1;
float n3 = 1;
int nP =12;
boolean up=true;

float d;
float red;
float green;
float blue;
//radius of the mouse...will explain more later
int rad =3;


void setup() {
  size(600, 600,P3D);
  smooth();
  noFill();
  stroke(255);
  frameRate( 15 );
}

void draw() {
  background(0);
  pushMatrix();
  translate(width/2, height/2);
  if (nP==12)up = true;
  if (nP==60)up = false;
  if(up) nP=nP+1; 
  else nP=nP-1;
  if (nP==30 ||nP==33||nP==48||nP==55)rotateY(1);
  if (nP==20 ||nP==22||nP==32||nP==36)translate(30, 20,0);
  rotate(0.5);
   
  float newscaler = scaler;
  for (int s = nP; s > 0; s--) {  
    beginShape();
  
    float mm = m + s;
    float nn1 = n1 + s;
    float nn2 = n2 + s;
    float nn3 = n3 + s;
    newscaler = newscaler * 0.98;
    float sscaler = newscaler;

    PVector[] points = superformula(mm, nn1, nn2, nn3, nP);
    curveVertex(points[points.length-1].x * sscaler, points[points.length-1].y * sscaler);
    for (int i = 0;i < points.length; i++) {
      curveVertex(points[i].x * sscaler, points[i].y * sscaler);
    }
    curveVertex(points[0].x * sscaler, points[0].y * sscaler);
    endShape();
  }
  popMatrix();
    loadPixels();
  //loop to go through every pixel, i=y value, j=x value
  for(int i=0;i<height;i++){
    for(int j=0;j<width;j++){
       
         
        //grabs pixel's current color
        color c = pixels[i*width+j];
         
        //the actual glitch! <<number and & 0xff mess
        //with the binary code and completely destroy the colors
        //very fun to mess around with. dont be afraid to tweak!       
        red = c <<4 & 0xff;
        green = c << 3 & 0xaa;
        blue = c  & 0xff;
         
        //gets distance from mouse to pixel
      //the *.4 at the end changes the "saving" area of effect:
      //when the mouse is at rest and the colors dont change.
      //higher value = smaller area
       d =dist(mouseX,mouseY,j,i)*.4;
        
       //make the colors change depending on distance to mouse      
        //rad = radius of the innermost circle
        
        //changes the pixel to the glitched pixel
        pixels[i*width+j]=color(red,green,blue);
        
    }
  }
   
   updatePixels();
  
}


PVector[] superformula(float m,float n1,float n2,float n3, int numPoints) {
  float phi = TWO_PI / numPoints;
  PVector[] points = new PVector[numPoints+1];
  for (int i = 0;i <= numPoints;i++) {
    points[i] = superformulaPoint(m,n1,n2,n3,phi * i);
  }
  return points;
}

PVector superformulaPoint(float m,float n1,float n2,float n3,float phi) {
  float r;
  float t1,t2;
  float a=1,b=1;
  float x = 0;
  float y = 0;

  t1 = cos(m * phi / 4) / a;
  t1 = abs(t1);
  t1 = pow(t1,n2);

  t2 = sin(m * phi / 4) / b;
  t2 = abs(t2);
  t2 = pow(t2,n3);

  r = pow(t1+t2,1/n1);
  if (abs(r) == 0) {
    x = 0;
    y = 0;
  }  
  else {
    r = 1 / r;
    x = r * cos(phi);
    y = r * sin(phi);
  }

  return new PVector(x, y);
}
  
