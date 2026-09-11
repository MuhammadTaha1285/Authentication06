// =============================
// Mobile Menu Toggle
// =============================

const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");

menuBtn.addEventListener("click", () => {

    navLinks.classList.toggle("show");

    if (navLinks.classList.contains("show")) {
        menuBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
    } else {
        menuBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
    }

});

// =============================
// Scroll Reveal Animation
// =============================

const revealElements = document.querySelectorAll(".card, .glass, .about-box");

function reveal() {

    const windowHeight = window.innerHeight;

    revealElements.forEach((element) => {

        const top = element.getBoundingClientRect().top;

        if (top < windowHeight - 100) {
            element.style.opacity = "1";
            element.style.transform = "translateY(0)";
        }

    });

}

revealElements.forEach((element) => {

    element.style.opacity = "0";
    element.style.transform = "translateY(60px)";
    element.style.transition = "0.8s ease";

});

window.addEventListener("scroll", reveal);
window.addEventListener("load", reveal);

// =============================
// Active Navbar Link
// =============================

const links = document.querySelectorAll(".nav-links a");

links.forEach(link => {

    link.addEventListener("click", () => {

        links.forEach(item => item.classList.remove("active"));

        link.classList.add("active");

    });

});

// =============================
// Hero Buttons Animation
// =============================

const buttons = document.querySelectorAll(".btn, .btn2");

buttons.forEach(button => {

    button.addEventListener("mouseenter", () => {
        button.style.transform = "scale(1.08)";
    });

    button.addEventListener("mouseleave", () => {
        button.style.transform = "scale(1)";
    });

});

// =============================
// Card Hover Effect
// =============================

const cards = document.querySelectorAll(".card");

cards.forEach(card => {

    card.addEventListener("mousemove", (e) => {

        const x = e.offsetX;
        const y = e.offsetY;

        card.style.background =
            `radial-gradient(circle at ${x}px ${y}px,
            rgba(0,212,255,.25),
            rgba(255,255,255,.08))`;

    });

    card.addEventListener("mouseleave", () => {

        card.style.background = "rgba(255,255,255,.08)";

    });

});

// =============================
// Navbar Background on Scroll
// =============================

window.addEventListener("scroll", () => {

    const header = document.querySelector("header");

    if (window.scrollY > 50) {

        header.style.background = "rgba(0,0,0,.85)";
        header.style.backdropFilter = "blur(20px)";

    } else {

        header.style.background = "rgba(255,255,255,.05)";
        header.style.backdropFilter = "blur(15px)";

    }

});