import "./bootstrap";
import "../sass/app.scss";
import * as bootstrap from "bootstrap";

window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  const button = document.getElementById("button");
  const navbarBrand = document.getElementById("navbar-brand");
  if (window.scrollY > 0) {
    navbar.classList.add("navbar-light");
    navbar.classList.add("bg-light");
    navbar.classList.remove("navbar-dark");
    button.classList.add("btn-outline-primary");
    button.classList.remove("btn-primary");
    navbarBrand.classList.add("text-primary");
  } else {
    navbar.classList.add("navbar-dark");
    navbar.classList.remove("bg-light");
    navbar.classList.remove("navbar-light");
    button.classList.remove("btn-outline-primary");
    button.classList.add("btn-primary");
    navbarBrand.classList.remove("text-primary");
  }
});
