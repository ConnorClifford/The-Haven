//--------------------mobile sitemap dropdowns------------------------//
window.addEventListener("load", zoom());
window.addEventListener("load", left());
window.addEventListener("load", right());
window.addEventListener("load", close());


function zoom(){
  var pics = document.getElementsByClassName("gallery_img");
  var i;
  for (i = 0; i < pics.length; i++) {
    pics[i].addEventListener("click", function() {
    //var minus = document.createTextNode("-");
    //var plus = document.createTextNode("+");
    var img = document.getElementById("zoom_img")
    var source = this.src;
    img.src = source;
    var display = document.querySelector("#zoom_view");
    display.classList.toggle("grid");
    });
  }
}

function left(){
  document.getElementById("left").addEventListener("click", function(){
    var image = document.getElementById("zoom_img");
    var pics = document.getElementsByClassName("gallery_img");
    var original;
    for(var i=0;i<pics.length;i++){
      if(pics[i].src == image.src){
        original = pics[i];
        console.log(original);
      }
    }
    var newImage = original.previousElementSibling;
    image.src = newImage.src;
  });
}


function right(){
  document.getElementById("right").addEventListener("click", function(){
    var image = document.getElementById("zoom_img");
    var pics = document.getElementsByClassName("gallery_img");
    var original;
    for(var i=0;i<pics.length;i++){
      if(pics[i].src == image.src){
        original = pics[i];
        console.log(original);
      }
    }
    var newImage = original.nextElementSibling;
    image.src = newImage.src;
  });
}


function close(){
  document.getElementById("close").addEventListener("click", function() {
    var display = document.querySelector("#zoom_view");
    display.classList.remove("grid");
  });
}
