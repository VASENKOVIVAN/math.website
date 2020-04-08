window.onscroll = function showHeader() {
  var header = document.querySelector(".nav-section");
  if (window.pageYOffset > 200) {
    header.classList.add("nav-section_fixed");
  } else {
    header.classList.remove("nav-section_fixed");
  }
};
