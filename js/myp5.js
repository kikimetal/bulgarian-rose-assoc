;
var cw = 100;
var ch = 100;
var rose_pop_angle = 0;
var rose_pop_angle_interval = 285;
var rose_pop_frame_counter = 0;
var rose_pop_interval = 24;
var multiply_scale_by = 0.2;
var Rose_petal;
var rose_petals = [];
Rose_petal = function(){
    this.b = [];
    this.angle = 0;
    this.scale = 0;
    this.alpha = 240;
    this.strokeAlpha = 255;
    this.fillRGB = {R: 255, G:140, B:170};
    this.strokeRGB = {R: 255, G:240, B:240};

    this.transform = function(){
        var s;
        s = this.scale * multiply_scale_by;
        this.b = [{
                    c1x: 30*s, c1y: -10*s,
                    c2x: 10*s, c2y: -116*s,
                    x: 100*s, y: -80*s,
                },{
                    c1x: 200*s, c1y: -29*s,
                    c2x: 110*s, c2y: 110*s,
                    x: 120*s, y: 120*s,
                }];
        s = null;

        this.angle += 0.2;

        if(this.scale < 0.5){
            this.scale += 0.006;
        }else{
            this.scale *= 1.006;
        }
        if(this.alpha > 0){
            if(this.alpha > 6){
                this.alpha -= 0.7;
            }else{
                this.alpha -= 0.1;
            }
            if(this.alpha < 100){
                this.strokeAlpha -= 2;
            }
        }else{
            this.alpha = 0;
            this.strokeAlpha = 0;
        }
    }

    this.draw = function(){
        this.transform();
        push();
        fill(this.fillRGB.R, this.fillRGB.G, this.fillRGB.B, this.alpha);
        stroke(this.strokeRGB.R, this.strokeRGB.G, this.strokeRGB.B,this.strokeAlpha);
        strokeWeight(1);
        rotate(radians(this.angle));
        beginShape();
            vertex(0, 0);
            bezierVertex(this.b[0].c1x, this.b[0].c1y, this.b[0].c2x, this.b[0].c2y, this.b[0].x, this.b[0].y);
            bezierVertex(this.b[1].c1x, this.b[1].c1y, this.b[1].c2x, this.b[1].c2y, this.b[1].x, this.b[1].y);
            bezierVertex(this.b[1].c2y, this.b[1].c2x, this.b[1].c1y, this.b[1].c1x, this.b[0].y, this.b[0].x);
            bezierVertex(this.b[0].c2y, this.b[0].c2x, this.b[0].c1y, this.b[0].c1x, 0, 0);
        endShape(CLOSE);
        pop();
    }
}

var set_canvas_size = function(){
    if (windowWidth > 768) {
        cw = 700;
        ch = 700;
        multiply_scale_by = 0.8;
    }else{
        cw = windowHeight > windowWidth ? windowWidth : windowHeight;
        ch = windowHeight > windowWidth ? windowWidth : windowHeight;
        multiply_scale_by = 0.6;
    }
}

function setup(){
    set_canvas_size();
    var canvas = createCanvas(cw, ch);
    canvas.parent("p5");
    blendMode(BLEND);
    rose_pop();
}

function draw(){
    clear();
    rose_pop();
}

function rose_pop(){

    rose_pop_frame_counter++;
    translate(cw / 2, ch / 2);

    if(rose_pop_frame_counter === 1 || rose_pop_frame_counter % rose_pop_interval === 0){

        if(rose_petals.length < 5){
            for (var i = 0; i < 5; i++) {
                rose_pop_angle += rose_pop_angle_interval;
                rose_petals.push(new Rose_petal);
                rose_petals[rose_petals.length - 1].angle = rose_pop_angle;
            }

        }else{
            rose_pop_angle += rose_pop_angle_interval;
            rose_petals.push(new Rose_petal);
            rose_petals[rose_petals.length - 1].angle = rose_pop_angle;
        }

    }
    for(var i = 0; i < rose_petals.length; i++){
        rose_petals[i].alpha === 0 ? rose_petals.splice(i, 1) : rose_petals[i].draw();
    }
}
