//--------------------mobile sitemap dropdowns------------------------//
window.addEventListener("load", collapse());
function collapse(){
  var coll = document.getElementsByClassName("collapsible");
  var i;
  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
    //var minus = document.createTextNode("-");
    //var plus = document.createTextNode("+");
      var item = this.querySelector(".plusMinus").textContent;
      if (item === "+"){
        //alert(item);
        this.querySelector(".plusMinus").innerText = "-";
        //alert(item);
      }
      else{
        this.querySelector(".plusMinus").innerText = "+";
        //alert(item);
      }
      //alert(item);
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
        }
      else {
        content.style.display = "block";
        }
    });
  }
}


/*  function source(){
    var left = document.getElementById("left");
    var right = document.getElementById("right");
    left.addEventListener("click", function(){
      i--;
    });
    right.addEventListener("click", function(){
      i++;
    });
    var img = document.getElementById("zoom_img")
    var source = this.src;
    img.src = source;
  } */
