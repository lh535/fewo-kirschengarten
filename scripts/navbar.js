let headerButtons = document.querySelectorAll(".dropdown-btn");
headerButtons.forEach((btn) => { btn.addEventListener('click', (e) => {
  let dropdownMenu = e.currentTarget.parentNode.querySelector(".dropdown-content");
  dropdownMenu.classList.toggle("active");
  });
});
