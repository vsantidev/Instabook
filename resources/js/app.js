import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// icon active search de la navbar
let searchForm = document.querySelector('.header .search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
}


//  icon de la navbar pour le menu réduit
let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
}

window.onscroll = () => {
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
}

// gestion des slides de la page home
let slides = document.querySelectorAll('home .slide');
let index = 0;

function next() {
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev() {
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}

// si link nav burger

let activeNav = document.querySelector('.navbar.active');
let burgerClick = document.querySelector('.burgerClick');

/* burgerClick.style.backgroundColor = "red"; */

let stateslink = null;

burgerClick.addEventListener("click", (e) => {

    console.log('cououc');
    if(stateslink == null){
        burgerClick.classList.add('active');
        stateslink = true;
    } else if(stateslink == false){
        burgerClick.classList.add('active');
        stateslink = true;
    } else {
        burgerClick.classList.remove('active');
        stateslink = false;
    }
})