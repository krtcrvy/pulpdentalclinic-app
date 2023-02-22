import "./bootstrap";

window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  const button = document.getElementById("button");
  if (window.scrollY > 0) {
    navbar.classList.add("scrolled");
    button.classList.add("btn-outline-light");
    button.classList.remove("btn-primary");
  } else {
    navbar.classList.remove("scrolled");
    button.classList.remove("btn-outline-light");
    button.classList.add("btn-primary");
  }
});
