let lastScrollTop = 0;
const header = document.querySelector("header");
const bottom_panel = document.querySelector(".bottom_panel");

window.addEventListener("scroll", function () {
  let scrollTop = window.scrollY || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    header.style.transform = "translateY(-100%)";
    bottom_panel.style.transform = "translateY(+100%)";
  } else {
    header.style.transform = "translateY(0)";
    bottom_panel.style.transform = "translateY(0)";
  }
  lastScrollTop = scrollTop;
});
