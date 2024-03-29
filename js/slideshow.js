  function initializeSlideShowMarkup() {  
  var slideWidthMax = maxSlideWidth(); 
  var slideHeightMax = maxSlideHeight();
  
  globals.wrapperObject.style.position = "relative";
  globals.wrapperObject.style.overflow = "hidden"; 
  globals.wrapperObject.style.width = slideWidthMax + "px";
  globals.wrapperObject.style.height = slideHeightMax + "px";
  
  var slideCount = globals.slideImages.length;
  for (var i = 0; i < slideCount; i++) { 
    globals.slideImages[i].style.opacity = 0;
    globals.slideImages[i].style.position = "absolute";
    globals.slideImages[i].style.top = (slideHeightMax - globals.slideImages[i].getBoundingClientRect().height) / 2 + "px";   
    globals.slideImages[i].style.left = (slideWidthMax - globals.slideImages[i].getBoundingClientRect().width) / 2 + "px";               
  }
  
  globals.slideImages[0].style.opacity = 1; 
      
  if (globals.buttonObject) {
    globals.buttonObject.textContent = globals.buttonStopText;
  }
}


function initializeGlobals() {   
  globals.wrapperObject = (document.getElementById(globals.wrapperID) ? document.getElementById(globals.wrapperID) : null);
  globals.buttonObject = (document.getElementById(globals.buttonID) ? document.getElementById(globals.buttonID) : null);   
  
  if (globals.wrapperObject) {
    globals.slideImages = (globals.wrapperObject.querySelectorAll('img') ? globals.wrapperObject.querySelectorAll('img') : []);
  }
}

