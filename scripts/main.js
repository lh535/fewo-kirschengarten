// get height of navbar, and offset main content that many pixels from top
let header = document.querySelector("header");
let main = document.querySelector("#main");
main.style.top = String(header.offsetHeight) + "px";
