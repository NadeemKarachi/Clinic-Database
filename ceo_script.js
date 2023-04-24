function toggleOS() {
  var OSview = document.getElementById('OSV');
  var OSdisplay = OSview.style.display;
  var OSbutton = document.getElementById('OStoggle');
  var OScolor = document.getElementById('OStoggle');

  if (OSdisplay == 'block') {
    OSview.style.display = 'none';
    OScolor.style.background = 'dodgerblue';
    OSbutton.innerHTML = 'Show Office Summary';
  } 
  else {
    OSview.style.display = 'block';
    OScolor.style.background = 'coral';
    OSbutton.innerHTML = 'Hide Office Summary';
  }
}

function toggleDS() {
  var DSview = document.getElementById('DSV');
  var DSdisplay = DSview.style.display;
  var DSbutton = document.getElementById('DStoggle');
  var DScolor = document.getElementById('DStoggle');

  if (DSdisplay == 'block') {
    DSview.style.display = 'none';
    DScolor.style.background = 'dodgerblue';
    DSbutton.innerHTML = 'Show Doctor Summary';
  }
  else {
    DSview.style.display = 'block';
    DScolor.style.background = 'coral';
    DSbutton.innerHTML = 'Hide Doctor Summary';
  }
}

function toggleRS() {
  var RSview = document.getElementById('RSV');
  var RSdisplay = RSview.style.display;
  var RSbutton = document.getElementById('RStoggle');
  var RScolor = document.getElementById('RStoggle');

  if (RSdisplay == 'block') {
    RSview.style.display = 'none';
    RScolor.style.background = 'dodgerblue';
    RSbutton.innerHTML = 'Show Revenue Summary';
  }
  else {
    RSview.style.display = 'block';
    RScolor.style.background = 'coral';
    RSbutton.innerHTML = 'Hide Revenue Summary';
  }
}