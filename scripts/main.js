// get height of navbar, and offset main content that many pixels from top
function setTopOffset(toOffSet) {
  toOffSet = '#main';  // set default
  let header = document.querySelector("header");
  let main = document.querySelector(toOffSet);
  main.style["padding-top"] = String(header.offsetHeight) + "px";
  let all = document.querySelector("html");
  all.style.width = String(all.clientWidth) + "px";  // width - scrollbar
}


// add height of all images in the small image div and
// set height of big image to that
// I didn't think this through properly, so it's currently not in use.
// It's not posssible to get flexbox item heights.
// So it only works with Breakpoints :')
function setPictureHeight() {
  let imageDiv = document.querySelector(".main-images");
  let smallImageDiv = imageDiv.querySelector(".small-img");
  let children = smallImageDiv.querySelectorAll("img");
  let total_height = 0;
  children.forEach((child) => { 
    total_height += child.naturalHeight;});

  imageDiv.firstElementChild.style["max-height"] = String(total_height) + "px";
}
