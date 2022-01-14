// get height of navbar, and offset main content that many pixels from top
function setTopOffset(toOffSet) {
  if (toOffSet == null) {
    toOffSet = "#main";
  }
  let header = document.querySelector("header");
  let main = document.querySelector(toOffSet);
  main.style["padding-top"] = String(header.offsetHeight) + "px";
}

// photo gallery
let gallery, galleryContent, currentIndex, gallerySize, galleryPictures;
let open = false;  // bool for keeping track of if gallery is open


function initGallery() {
  gallery = document.querySelector(".modal");
  galleryContent = document.querySelector(".gallery-content");
  // collect all pictures in image-gallery class and put them in array
  // then add event listener which opens gallery and passes array index of
  // clicked image
  galleryPictures = document.querySelectorAll(".image-gallery");
  galleryPictures.forEach((pic) => { pic.addEventListener("click", (e) =>
    {
      e.preventDefault();
      openGallery(Array.prototype.indexOf.call(galleryPictures, e.target));
    });
  });
  gallerySize = galleryPictures.length;
}

function openGallery(num) {
  gallery.style.display = "block";
  currentIndex = num;
  if (galleryPictures[currentIndex].nodeName == "A") {
    galleryContent.src = galleryPictures[currentIndex].href;
  }
  else {
  galleryContent.src = galleryPictures[currentIndex].src;
  }
  open = true
}

function closeGallery() {
  gallery.style.display = "none";
  open = false
}

function nextPicture() {
  currentIndex = (currentIndex + 1) % gallerySize;
  if (galleryPictures[currentIndex].nodeName == "A") {
    galleryContent.src = galleryPictures[currentIndex].href;
  }
  else {
  galleryContent.src = galleryPictures[currentIndex].src;
  }
}

function prevPicture() {
  currentIndex = currentIndex - 1 >= 0 ? currentIndex - 1 : gallerySize - 1;
  if (galleryPictures[currentIndex].nodeName == "A") {
    galleryContent.src = galleryPictures[currentIndex].href;
  }
  else {
  galleryContent.src = galleryPictures[currentIndex].src;
  }
}

// click outside of image and buttons while gallery is open to close
function checkClose() {
    modal = document.querySelector(".modal");
    modal.addEventListener('click', function(e) {
    let clicked = e.target.className;
    if (clicked != undefined && (clicked == "prev-button" || clicked == "next-button" || clicked == "gallery-content")) {
      return;
    }
    closeGallery();
  });
}


// while modal is open: use keys to navigate
document.addEventListener('keyup', (e) => {
  if (open) {
    if (e.code == "ArrowLeft") prevPicture()

    else if (e.code == "ArrowRight") nextPicture()
  }
});
    

// add height of all images in the small image div and
// set height of big image to that
// I didn't think this through properly, so it's currently not in use.
// It's not posssible to get flexbox item heights.
// So it only works with Breakpoints :')
/*
function setPictureHeight() {
  let imageDiv = document.querySelector(".main-images");
  let smallImageDiv = imageDiv.querySelector(".small-img");
  let children = smallImageDiv.querySelectorAll("img");
  let total_height = 0;
  children.forEach((child) => { 
    total_height += child.naturalHeight;});

  imageDiv.firstElementChild.style["max-height"] = String(total_height) + "px";
}
*/
