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
