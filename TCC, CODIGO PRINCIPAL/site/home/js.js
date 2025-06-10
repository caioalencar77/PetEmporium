const mainHeader = document.getElementById("mainHeader");
const mainNavbar = document.getElementById("mainNavbar");
const body = document.body; 

const initialHeaderHeight = mainHeader.getBoundingClientRect().height;

const navbarHeight = mainNavbar.offsetHeight; 

const scrollThreshold = initialHeaderHeight + 5; 

window.addEventListener("scroll", () => {
    if (window.scrollY >= scrollThreshold) {
        mainHeader.classList.add("header-hidden");
        mainNavbar.classList.add("navbar-visible");
        
        body.style.paddingTop = navbarHeight + "px";
    } else {
        mainHeader.classList.remove("header-hidden");
        mainNavbar.classList.remove("navbar-visible");
        
        body.style.paddingTop = "0";
    }
});