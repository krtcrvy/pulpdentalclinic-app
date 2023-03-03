import "./bootstrap";

window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    const button = document.getElementById("button");
    const navbarBrand = document.getElementById("navbar-brand");
    if (window.scrollY > 0) {
        navbar.classList.add("navbar-light");
        navbar.classList.add("bg-light");
        navbar.classList.remove("navbar-dark");
        button.classList.add("btn-primary");
        button.classList.remove("btn-outline-light");
        navbarBrand.classList.add("text-primary");
    } else {
        navbar.classList.add("navbar-dark");
        navbar.classList.remove("bg-light");
        navbar.classList.remove("navbar-light");
        button.classList.remove("btn-primary");
        button.classList.add("btn-outline-light");
        navbarBrand.classList.remove("text-primary");
    }
});

window.addEventListener("DOMContentLoaded", (event) => {
    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector("#sidebarToggle");
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener("click", (event) => {
            event.preventDefault();
            document.body.classList.toggle("sb-sidenav-toggled");
            localStorage.setItem(
                "sb|sidebar-toggle",
                document.body.classList.contains("sb-sidenav-toggled")
            );
        });
    }
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 10) {
            $("#navbar-brand-img-top").hide();
            $("#navbar-brand-img-scroll").show();
        } else {
            $("#navbar-brand-img-top").show();
            $("#navbar-brand-img-scroll").hide();
        }
    });
});

$(document).ready(function () {
    $("#example").DataTable();
});
