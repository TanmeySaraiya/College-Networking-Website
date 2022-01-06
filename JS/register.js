function reg(){
  var r = document.getElementById("register").style.display = "inline";
  var l = document.getElementById("login").style.display = "none";
  var ra = document.getElementById("reg_act").style.color = "white";
  var la = document.getElementById("log_act").style.color = "gray";
  // l.style.display = "none";
  // r.style.display = "visible";
}

function log(){
  var r = document.getElementById("register").style.display = "none";
  var l = document.getElementById("login").style.display = "inline";
  var ra = document.getElementById("reg_act").style.color = "gray";
  var la = document.getElementById("log_act").style.color = "white";
  // l.style.display = "visible";
  // r.style.display = "none";
}

// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();
