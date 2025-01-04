var scrollToTopBtn = document.querySelector("#scroll-to-top-btn");

window.addEventListener("scroll", function() {
  if (window.pageYOffset > 100) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
});

scrollToTopBtn.addEventListener("click", function() {
  window.scrollTo(0, 0);
});



// ----------------=-------------toggle button ----------------------------

document.addEventListener('DOMContentLoaded', () => {
  const toggleButton = document.getElementsByClassName('toggle-btn')[0];
  const navbarLinks = document.getElementsByClassName('navbar-links')[0];

  toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active');
  });
}
);