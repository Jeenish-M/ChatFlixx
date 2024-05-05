// Variable declaration for Hamburger menu
const hamburger = document.querySelector(".hamburger");
const Home = document.querySelector(".Hm");
const About = document.querySelector(".Abt");
const Contact = document.querySelector(".Cnt");
const Button = document.querySelector(".Btn");

// Script for Hamburger menu

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    Home.classList.toggle("active");
    About.classList.toggle("active");
    Contact.classList.toggle("active");
    Button.classList.toggle("active");
 });
 
 document.querySelectorAll(".Hm, .Abt, .Cnt, .Btn").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    Home.classList.remove("active");
    About.classList.remove("active");
    Contact.classList.remove("active");
    Button.classList.remove("active");
 }));