// get height of navbar, and offset main content that many pixels from top
function setTopOffset(toOffSet='#main') {
  let header = document.querySelector("header");
  let main = document.querySelector(toOffSet);
  main.style["padding-top"] = String(header.offsetHeight) + "px";
  let all = document.querySelector("html");
  all.style.width = String(all.clientWidth) + "px";  // width - scrollbar
}
