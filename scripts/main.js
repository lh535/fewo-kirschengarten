// get height of navbar, and offset main content that many pixels from top
function setTopOffset() {
  let header = document.querySelector("header");
  let main = document.querySelector("#main");
  main.style.top = String(header.offsetHeight) + "px";
  let all = document.querySelector("html");
  all.style.width = String(all.clientWidth) + "px";
}
