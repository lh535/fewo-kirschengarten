// toggle drop down menu. argument is surrounding div for button.
// by default just toggle, or provide additional arguments to only deactivate/activate. If both are true, do nothing
function toggleDropdown(dropdownDiv, justActivate=false, justDeactivate=false) {
  let dropdownMenu = dropdownDiv.querySelector(".dropdown-content");
  if (!justActivate && !justDeactivate) {
    dropdownMenu.classList.toggle("active");
    dropdownDiv.classList.toggle("active"); // no css functionality, just for easier use later
  }
  else if (justActivate && justDeactivate) {
    return;
  }
  else if (justActivate) { 
    dropdownMenu.classList.add("active");
    dropdownDiv.classList.add("active");
  }
  else if (justDeactivate) {
    dropdownMenu.classList.remove("active");
    dropdownDiv.classList.remove("active");
  }
}

// closes all dropdowns. If except specifies a header div, skip that one
function closeAllDropdown(except=undefined) {
  headerDiv.forEach((div) => {
    if (except != undefined && div == except) {
      return;
    }
    div.classList.remove("active");
    let dropdownMenu = div.querySelector(".dropdown-content");
    dropdownMenu.classList.remove("active");
  });
}
    
let headerButtons = document.querySelectorAll(".dropdown-btn");
let headerDiv = document.querySelectorAll(".dropdown");

// event listener for button clicks
headerButtons.forEach((btn) => { btn.addEventListener('click', (e) => {
  closeAllDropdown(e.currentTarget.parentNode); // call this first to close all other dropdowns that may be open
  toggleDropdown(e.currentTarget.parentNode);
  });
});

// for clicks outside the dropdown, which close the menu if it was open before
window.onclick =  (e) => {
  let classes = e.target.parentNode.classList;
  if (classes != undefined && classes.length > 0 && classes[0] === "dropdown") {
    return;
  }
  closeAllDropdown();
};

/* for hover. temporarily disabled since using both clicking and hover is counterintuitive (?)

// event listener for dropdown hover - only opens, and keeps open since it targets entire div
headerDiv.forEach((div) => {div.addEventListener('mouseenter', (e) => {
  console.log(e);
  toggleDropdown(e.currentTarget, true);
});
});

// event listener for closing the dropdown after hover is over
headerDiv.forEach((div) => {div.addEventListener('mouseout', (e) => {
  toggleDropdown(e.currentTarget, undefined, true);
});
});
*/
