function tabButton(evt, cityName) {
  var tabContent = document.getElementsByClassName("tabContent");
  var tabLink = document.getElementsByClassName("tabLink");

  //hide all the buttons
  for (var i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }

  //Don't make all the buttons active anymore
  for (var i = 0; i < tabLink.length; i++) {
    tabLink[i].className = tabLink[i].className.replace("active", "");
  }

  //show the button that was clicked and make that button active
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += "active";
}

function clickedYesOrNo(evt, yn){
  var ynContent = document.getElementsByClassName("yesOrNoContent");
  var ynLinks = document.getElementsByClassName("ynLink");

  for (var i = 0; i < ynContent.length; i++){
    ynContent[i].style.display = "none";
  }

  for (var i = 0; i < ynLinks.length; i++){
    ynLinks[i].className = ynLinks[i].className.replace("active", "");
  }

  document.getElementById(yn).style.display = "block";
  evt.currentTarget.className += "active";
}

function myfun(){
  d = new Date();
  return d.getDate();
}

//lets try
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
