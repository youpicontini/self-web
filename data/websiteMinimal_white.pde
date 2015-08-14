/* OpenProcessing Tweak of *@*http://www.openprocessing.org/sketch/17846*@* */
/* !do not delete the line above, required for linking your tweak if you upload again */
float nxScale;
float nyScale;
float n=0;
float t;
int w = 407;
int h = 162;

void setup(){
  size(407, 162);
  smooth();
}

void draw(){
  background(0);
  noFill();
  for(float j=0; j<h; j+=4){
    beginShape(POLYGON);
    for(float i=0; i<w; i+=4){
      nxScale = w/4;
      nyScale = h/4;
      n = noise(i/nxScale, j/nyScale, t/nxScale)*255;
      stroke(n, 200);      
      curveVertex(i, j+n);
    }
    endShape();
    stroke(255);
    rect(0,400,0,162);
  }
  float mx = map(width/2,2, w, 0, 4);
  t+=mx;
}



