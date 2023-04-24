function toggleSV() {
    var SVview = document.getElementById('SV');
    var SVdisplay = SVview.style.display;
    var SVbutton = document.getElementById('SVtoggle');
    var SVcolor = document.getElementById('SVtoggle');
  
    if (SVdisplay == 'block') {
      SVview.style.display = 'none';
      SVcolor.style.background = 'dodgerblue';
      SVbutton.innerHTML = 'Show Schedule';
    } 
    else {
      SVview.style.display = 'block';
      SVcolor.style.background = 'coral';
      SVbutton.innerHTML = 'Hide Schedule';
    }
  }
  
  function togglePV() {
    var PVview = document.getElementById('PV');
    var PVdisplay = PVview.style.display;
    var PVbutton = document.getElementById('PVtoggle');
    var PVcolor = document.getElementById('PVtoggle');
  
    if (PVdisplay == 'block') {
      PVview.style.display = 'none';
      PVcolor.style.background = 'dodgerblue';
      PVbutton.innerHTML = 'Show Patients';
    }
    else {
      PVview.style.display = 'block';
      PVcolor.style.background = 'coral';
      PVbutton.innerHTML = 'Hide Patients';
    }
  }
  
  function toggleAV() {
    var AVview = document.getElementById('AV');
    var AVdisplay = AVview.style.display;
    var AVbutton = document.getElementById('AVtoggle');
    var AVcolor = document.getElementById('AVtoggle');
  
    if (AVdisplay == 'block') {
      AVview.style.display = 'none';
      AVcolor.style.background = 'dodgerblue';
      AVbutton.innerHTML = 'Show Appointments';
    }
    else {
      AVview.style.display = 'block';
      AVcolor.style.background = 'coral';
      AVbutton.innerHTML = 'Hide Appointments';
    }
  }
  
  function toggleIV() {
    var IVview = document.getElementById('IV');
    var IVdisplay = IVview.style.display;
    var IVbutton = document.getElementById('IVtoggle');
    var IVcolor = document.getElementById('IVtoggle');
  
    if (IVdisplay == 'block') {
      IVview.style.display = 'none';
      IVcolor.style.background = 'dodgerblue';
      IVbutton.innerHTML = 'Show Inventory';
    }
    else {
      IVview.style.display = 'block';
      IVcolor.style.background = 'coral';
      IVbutton.innerHTML = 'Hide Inventory';
    }
  }
  
  function toggleP() {
    var Pview = document.getElementById('P');
    var Pdisplay = Pview.style.display;
    var Pbutton = document.getElementById('Ptoggle');
    var Pcolor = document.getElementById('Ptoggle');
  
    if (Pdisplay == 'block') {
      Pview.style.display = 'none';
      Pcolor.style.background = 'dodgerblue';
      Pbutton.innerHTML = 'Show Profile';
    }
    else {
      Pview.style.display = 'block';
      Pcolor.style.background = 'coral';
      Pbutton.innerHTML = 'Hide Profile';
    }
  }