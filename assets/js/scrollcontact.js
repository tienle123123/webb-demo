var colorswitch="black";
window.onscroll = function() {myFunction()};
    function myFunction(){
    if (document.documentElement.scrollTop > 100) {
        colorswitch="white";
        document.getElementById('jshome').style.color="white";
        document.getElementById('jsab').style.color="white";
        document.getElementById('jsdes').style.color="white";
        document.getElementById('jsblog').style.color="white";
    
      }
    else{
        colorswitch="black";
        document.getElementById('jshome').style.color="black";
        document.getElementById('jsab').style.color="black";
        document.getElementById('jsdes').style.color="black";
        document.getElementById('jsblog').style.color="black";
      
    }
  }
function mouseon(n) {
  var id;
  if (n == 1) {id = "jshome";}
  if (n == 2) {id = "jsab";}
  if (n == 3) {id = "jsdes";}
  if (n == 4) {id = "jsblog";}
  if (n == 6) {id = "jslogout";}
  if (n == 7) {id = "jslogin";}
  if (n == 8) {id = "jssignup";}
  document.getElementById(id).style.color = "#a2cce3";
}
function mouseout(n) {
  var id;
    if (n == 1) {id = "jshome";document.getElementById(id).style.color = colorswitch;}
    if (n == 2) {id = "jsab";document.getElementById(id).style.color = colorswitch;}
    if (n == 3) {id = "jsdes";document.getElementById(id).style.color = colorswitch;}
    if (n == 4) {id = "jsblog";document.getElementById(id).style.color = colorswitch;}
    if (n == 6) {id = "jslogout";document.getElementById(id).style.color = "#FFCC5C";}
    if (n == 7) {id = "jslogin";document.getElementById(id).style.color = "#FFCC5C";}
    if (n == 8) {id = "jssignup";document.getElementById(id).style.color = "#FFCC5C";}
}