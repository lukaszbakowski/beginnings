
var canvas =document.getElementById("output");
var cnt = document.getElementById("output").getContext("2d");


canvas.height = document.documentElement.clientHeight - 2;

  let calc = 1024;
  if(calc < document.documentElement.clientWidth) {
      canvas.width = calc;
  } else {
      
      canvas.width = (document.documentElement.clientWidth - 2);
  }
  
var center = {
    horizontal:canvas.width/2,
    vertical:canvas.height/2
};



function clearer() {
  cnt.clearRect(0, 0, canvas.width, canvas.height); // clear the canvas
  requestAnimationFrame(clearer);
};
clearer();
var timer = new Date();
var hours = timer.getSeconds() + (60 * timer.getMinutes()) + (3600 * timer.getHours());

const angle = (6*Math.PI)/180;
var radian = angle * timer.getSeconds() - 90*Math.PI/180;

function sekundnik() {

    let xxx,yyy;
    cnt.beginPath();
    cnt.moveTo(center.horizontal,center.vertical);
    this.xxx = center.horizontal + Math.cos(radian) *100;
    this.yyy = center.vertical + Math.sin(radian) *100;
    
    cnt.lineTo(this.xxx,this.yyy);
    cnt.stroke();
    requestAnimationFrame(sekundnik);
}
function run() {
    if(check) {
        radian += angle;
        radian2 +=angle2;
        radian3 +=angle3;
        check = false;
    }
    requestAnimationFrame(run);
}
run();
var check = false;
setInterval(()=> {
    check = true;
}, 1000);
sekundnik();

const angle2 = (0.1*Math.PI)/180;
var radian2 =angle2 * 60*timer.getMinutes() - 90*Math.PI/180;

function minutnik() {

    let xxx,yyy;
    cnt.beginPath();
    cnt.moveTo(center.horizontal,center.vertical);
    this.xxx = center.horizontal + Math.cos(radian2) *110;
    this.yyy = center.vertical + Math.sin(radian2) *110;
    
    cnt.lineTo(this.xxx,this.yyy);
    cnt.stroke();
    requestAnimationFrame(minutnik);
}
minutnik();


const angle3 = ((30/3600)*Math.PI)/180;
var radian3 = angle3 * hours - 90*Math.PI/180;

function godzinnik() {
    let xxx,yyy;
    cnt.beginPath();
    cnt.moveTo(center.horizontal,center.vertical);
    this.xxx = center.horizontal + Math.cos(radian3) *90;
    this.yyy = center.vertical + Math.sin(radian3) *90;
    
    cnt.lineTo(this.xxx,this.yyy);
    cnt.stroke();
    requestAnimationFrame(godzinnik);
}
godzinnik();

function write() {
    cnt.font = "30px Arial";
    cnt.textAlign = "center";
    cnt.textBaseline = 'middle'; 
    let change = 30*Math.PI/180;
    let angle = 0;
    for(let i = 1; i<=12;i++) {
         cnt.fillText(i, center.horizontal+ Math.cos(angle - 60*Math.PI/180)*120, center.vertical+ Math.sin(angle - 60*Math.PI/180)*120);
         angle +=change;
    }
    requestAnimationFrame(write);
}
write();



function podzialka() {
    let xxx,yyy;
    cnt.beginPath();
    cnt.lineWidth = '1';
    cnt.strokeStyle = "white";
    let podz = 0;
    let e;
    for(let i = 1;i<=60;i++) {
    if((i-1)%5 === 0) {
        e = 5;
    } else {
        e=0;
    }
    cnt.moveTo(center.horizontal + Math.cos(podz) * 80, center.vertical + Math.sin(podz) * 80);
    this.xxx = center.horizontal + Math.cos(podz) * (90+e);
    this.yyy = center.vertical + Math.sin(podz) * (90+e);

    cnt.lineTo(this.xxx,this.yyy);
    cnt.stroke();
    podz += angle;
    }

    cnt.closePath();
    requestAnimationFrame(podzialka);
}
podzialka();

function circle() {
    cnt.beginPath();
    cnt.lineWidth = '3';
    cnt.arc(center.horizontal, center.vertical, 150, 0, 2 * Math.PI);
    cnt.fillStyle = 'rgba(250,0,0,0.7)';
    cnt.closePath(); //close the circle path
    cnt.stroke();
    requestAnimationFrame(circle);
}

circle();