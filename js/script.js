let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-th-list');
    navbar.classList.toggle('active');
}

let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .navbar a');

window.onscroll = () =>{

    menu.classList.remove('fa-th-list');
    navbar.classList.remove('active');

    section.forEach(sec =>{

      let top = window.scrollY;
      let height = sec.offsetHeight;
      let offset = sec.offsetTop - 150;
      let id = sec.getAttribute('id');

      if(top >= offset && top < offset + height){
        navLinks.forEach(links =>{
          links.classList.remove('active');
          document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
        });
      };
    });
}

document.querySelector('#search-icon').onclick = () =>{
    document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () =>{
    document.querySelector('#search-form').classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 5500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
  });

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 5500,
      disableOnInteraction: false,
    },
    loop:true,
    
    breakpoints: {
      0:{
        slidesPerView: 1,
      },
      640:{
        slidesPerView: 2,
      },
      768:{
        slidesPerView: 2,
      },
      912:{
        slidesPerView: 3,
      },
    },
  });

  function loader(){
    document.querySelector('.loader-container').classList.add('fade-out');
  }

  function fadeOut(){
    setInterval(loader, 3000)
  }
  window.onload = fadeOut;

  
  var clicksJusAlpukat = 0; //1
  var clicksJusApel = 0; //2
  var clicksJusJambu = 0; //3
  var clicksJusJeruk = 0; //4
  var clicksJusNanas = 0; //5
  var clicksJusSemangka = 0; //6
  var clicksJusStroberi = 0; //7
  var clicksRujak = 0; //8
  var clicksSalad = 0; //9
  var clicksSop = 0; //10
  
  function myFunction1() {
    clicksJusAlpukat += 1;
    document.getElementById("likes1-JusAlpukat").innerHTML = clicksJusAlpukat;
    document.getElementById("likes2-JusAlpukat").innerHTML = clicksJusAlpukat;
  }
  function myFunction2() {
    clicksJusApel += 1;
    document.getElementById("likes1-JusApel").innerHTML = clicksJusApel;
    document.getElementById("likes2-JusApel").innerHTML = clicksJusApel;
  }
  function myFunction3() {
    clicksJusJambu += 1;
    document.getElementById("likes1-JusJambu").innerHTML = clicksJusJambu;
    document.getElementById("likes2-JusJambu").innerHTML = clicksJusJambu;
  }
  function myFunction4() {
    clicksJusJeruk += 1;
    document.getElementById("likes1-JusJeruk").innerHTML = clicksJusJeruk;
    document.getElementById("likes2-JusJeruk").innerHTML = clicksJusJeruk;
  }
  function myFunction5() {
    clicksJusNanas += 1;
    document.getElementById("likes1-JusNanas").innerHTML = clicksJusNanas;
    document.getElementById("likes2-JusNanas").innerHTML = clicksJusNanas;
  }
  function myFunction6() {
    clicksJusSemangka += 1;
    document.getElementById("likes1-JusSemangka").innerHTML = clicksJusSemangka;
    document.getElementById("likes2-JusSemangka").innerHTML = clicksJusSemangka;
  }
  function myFunction7() {
    clicksJusStroberi += 1;
    document.getElementById("likes1-JusStroberi").innerHTML = clicksJusStroberi;
    document.getElementById("likes1-JusStroberi").innerHTML = clicksJusStroberi;
  }
  function myFunction8() {
    clicksRujak += 1;
    document.getElementById("likes1-Rujak").innerHTML = clicksRujak;
    document.getElementById("likes2-Rujak").innerHTML = clicksRujak;
  }
  function myFunction9() {
    clicksSalad += 1;
    document.getElementById("likes1-Salad").innerHTML = clicksSalad;
    document.getElementById("likes2-Salad").innerHTML = clicksSalad;
  }
  function myFunction10() {
    clicksSop += 1;
    document.getElementById("likes1-Sop").innerHTML = clicksSop;
    document.getElementById("likes2-Sop").innerHTML = clicksSop;
  }