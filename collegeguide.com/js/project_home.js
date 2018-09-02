var p=document.getElementById("c1-1");
var n=document.getElementById("c2-1");

/*p.onclick=function(){
    var m=document.getElementById("b1");
    var x=3;
    while(x>-1){
   var images=["img/slider1.jpg","img/slider2.jpg","img/slider3.jpg","img/slider4.jpeg"]; 
    m.src=images[x];
    x--;
    }
}
n.onclick=function(){
    var m=document.getElementById("b1");
    var x=0;
    while(x<4){
    var images=["img/slider1.jpg","img/slider2.jpg","img/slider3.jpg","img/slider4.jpeg"];
    m.src=images[x];
    x++;
    }
}*/
var images=["img/slider1.jpg","img/slider2.jpg","img/slider3.jpg","img/slider4.jpeg"]; 
var m=document.getElementById("b1");
var currentImage=0;
function changeimage(){
    m.src=images[currentImage++];
if(currentImage>=images.length-1){
    currentImage-=images.length;
    }
  setInterval(changeimage(),1000);
}
    
    


