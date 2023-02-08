// responsive navbar
let menu = document.querySelector("#menu-bars");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-th-list");
  navbar.classList.toggle("active");
  navbar.a.classList.toggle("active");
};

let section = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header .navbar a");

// header activer ketika scroll
window.onscroll = () => {
  menu.classList.remove("fa-th-list");
  navbar.classList.remove("active");

  section.forEach((sec) => {
    let top = window.scrollY;
    let height = sec.offsetHeight;
    let offset = sec.offsetTop - 150;
    let id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      navLinks.forEach((links) => {
        links.classList.remove("active");
        document
          .querySelector("header .navbar a[href*=" + id + "]")
          .classList.add("active");
      });
    }
  });
};

// seacrh
document.querySelector("#search-icon").onclick = () => {
  document.querySelector("#search-form").classList.toggle("active");
};

document.querySelector("#close").onclick = () => {
  document.querySelector("#search-form").classList.remove("active");
};

const searchForm = document.getElementById("search-form");
searchForm.addEventListener("submit", function (event) {
  event.preventDefault();

  const searchBox = document.getElementById("search-box");
  const searchTerm = searchBox.value.toLowerCase();

  if (searchTerm === "jus alpukat" || searchTerm === "alpukat") {
    document.getElementById("jus-alpukat").scrollIntoView();
  } else if (searchTerm === "jus apel" || searchTerm === "apel") {
    document.getElementById("jus-apel").scrollIntoView();
  } else if (searchTerm === "jus jambu" || searchTerm === "jambu") {
    document.getElementById("jus-jambu").scrollIntoView();
  } else if (searchTerm === "jus jeruk" || searchTerm === "jeruk") {
    document.getElementById("jus-jeruk").scrollIntoView();
  } else if (searchTerm === "jus nanas" || searchTerm === "nanas") {
    document.getElementById("jus-nanas").scrollIntoView();
  } else if (searchTerm === "jus semangka" || searchTerm === "semangka") {
    document.getElementById("jus-semangka").scrollIntoView();
  } else if (searchTerm === "jus stroberi" || searchTerm === "stroberi") {
    document.getElementById("jus-stroberi").scrollIntoView();
  } else if (searchTerm === "rujak buah" || searchTerm === "rujak") {
    document.getElementById("rujak-buah").scrollIntoView();
  } else if (searchTerm === "salad buah" || searchTerm === "salad") {
    document.getElementById("salad-buah").scrollIntoView();
  } else if (searchTerm === "sop buah" || searchTerm === "sop") {
    document.getElementById("sop-buah").scrollIntoView();
  } else {
    alert(`"${searchTerm}" tidak ditemukan pada UTech Store`);
  }
});

// home slider
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
  loop: true,
});


// order radio button
const jumlahProduk1 = document.getElementById("jumlahProduk1");
const jumlahProduk2 = document.getElementById("jumlahProduk2");
const jumlahProduk3 = document.getElementById("jumlahProduk3");
const jumlahProduk4 = document.getElementById("jumlahProduk4");
const jumlahProduk5 = document.getElementById("jumlahProduk5");
const jumlahProduk6 = document.getElementById("jumlahProduk6");
const jumlahProduk7 = document.getElementById("jumlahProduk7");
const jumlahProduk8 = document.getElementById("jumlahProduk8");
const jumlahProduk9 = document.getElementById("jumlahProduk9");
const jumlahProduk10 = document.getElementById("jumlahProduk10");


const radioButtonContainer1 = document.getElementById("radioButtonContainer1");
const radioButtonContainer2 = document.getElementById("radioButtonContainer2");
const radioButtonContainer3 = document.getElementById("radioButtonContainer3");
const radioButtonContainer4 = document.getElementById("radioButtonContainer4");
const radioButtonContainer5 = document.getElementById("radioButtonContainer5");
const radioButtonContainer6 = document.getElementById("radioButtonContainer6");
const radioButtonContainer7 = document.getElementById("radioButtonContainer7");
const radioButtonContainer8 = document.getElementById("radioButtonContainer8");
const radioButtonContainer9 = document.getElementById("radioButtonContainer9");
const radioButtonContainer10 = document.getElementById("radioButtonContainer10");

jumlahProduk1.addEventListener("input", function() {
  radioButtonContainer1.innerHTML = "";
  for (let i = 1; i <= jumlahProduk1.value; i++) {
    radioButtonContainer1.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman${i}" value="biasa"> Biasa 
      <input type="radio" name="minuman${i}" value="es"> Es
      <br>
    `;
  }
});

jumlahProduk2.addEventListener("input", function() {
  radioButtonContainer2.innerHTML = "";
  for (let i = 1; i <= jumlahProduk2.value; i++) {
    radioButtonContainer2.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman${i}" value="biasa"> Biasa 
      <input type="radio" name="minuman${i}" value="es"> Es
      <br>
    `;
  }
});

jumlahProduk3.addEventListener("input", function() {
  radioButtonContainer3.innerHTML = "";
  for (let i = 1; i <= jumlahProduk3.value; i++) {
    radioButtonContainer3.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman${i}" value="biasa"> Biasa 
      <input type="radio" name="minuman${i}" value="es"> Es
      <br>
    `;
  }
});

jumlahProduk4.addEventListener("input", function() {
  radioButtonContainer4.innerHTML = "";
  for (let i = 1; i <= jumlahProduk4.value; i++) {
    radioButtonContainer4.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman${i}" value="biasa"> Biasa 
      <input type="radio" name="minuman${i}" value="es"> Es
      <br>
    `;
  }
});

jumlahProduk5.addEventListener("input", function() {
  radioButtonContainer5.innerHTML = "";
  for (let i = 1; i <= jumlahProduk5.value; i++) {
    radioButtonContainer5.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman${i}" value="biasa"> Biasa 
      <input type="radio" name="minuman${i}" value="es"> Es
      <br>
    `;
  }
});

jumlahProduk6.addEventListener("input", function() {
  radioButtonContainer6.innerHTML = "";
  for (let i = 1; i <= jumlahProduk6.value; i++) {
    radioButtonContainer6.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman${i}" value="biasa"> Biasa 
      <input type="radio" name="minuman${i}" value="es"> Es
      <br>
    `;
  }
});

jumlahProduk7.addEventListener("input", function() {
  radioButtonContainer7.innerHTML = "";
  for (let i = 1; i <= jumlahProduk7.value; i++) {
    radioButtonContainer7.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman${i}" value="biasa"> Biasa 
      <input type="radio" name="minuman${i}" value="es"> Es
      <br>
    `;
  }
});

jumlahProduk8.addEventListener("input", function() {
  radioButtonContainer8.innerHTML = "";
  for (let i = 1; i <= jumlahProduk8.value; i++) {
    radioButtonContainer8.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman${i}" value="biasa"> Biasa 
      <input type="radio" name="minuman${i}" value="es"> Es
      <br>
    `;
  }
});

jumlahProduk9.addEventListener("input", function() {
  radioButtonContainer9.innerHTML = "";
  for (let i = 1; i <= jumlahProduk9.value; i++) {
    radioButtonContainer9.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman${i}" value="biasa"> Biasa 
      <input type="radio" name="minuman${i}" value="es"> Es
      <br>
    `;
  }
});

jumlahProduk10.addEventListener("input", function() {
  radioButtonContainer10.innerHTML = "";
  for (let i = 1; i <= jumlahProduk10.value; i++) {
    radioButtonContainer10.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman${i}" value="biasa"> Biasa 
      <input type="radio" name="minuman${i}" value="es"> Es
      <br>
    `;
  }
});


// review slider
var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 5500,
    disableOnInteraction: false,
  },
  loop: true,

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    912: {
      slidesPerView: 3,
    },
  },
});

// loader
function loader() {
  document.querySelector(".loader-container").classList.add("fade-out");
}

function fadeOut() {
  setInterval(loader, 3000);
}
window.onload = fadeOut;

// UI bintang & sort
const dishes = [
  {
    name: "Jus Alpukat",
    price: "7.000",
    image: "img/jus alpukat.png",
    stars: 0,
  },
  {
    name: "Jus Apel",
    price: "7.000",
    image: "img/jus apel.png",
    stars: 0,
  },
  {
    name: "Jus Jambu",
    price: "7.000",
    image: "img/jus jambu.png",
    stars: 0,
  },
  {
    name: "Jus Jeruk",
    price: "7.000",
    image: "img/jus jeruk.png",
    stars: 0,
  },
  {
    name: "Jus Nanas",
    price: "7.000",
    image: "img/jus nanas.png",
    stars: 0,
  },
  {
    name: "Jus Semangka",
    price: "7.000",
    image: "img/jus semangka.png",
    stars: 0,
  },
  {
    name: "Jus Stroberi",
    price: "7.000",
    image: "img/jus Stroberi.png",
    stars: 0,
  },
  {
    name: "Rujak Buah",
    price: "10.000",
    image: "img/rujak buah.png",
    stars: 0,
  },
  {
    name: "Salad Buah",
    price: "10.000",
    image: "img/salad buah.png",
    stars: 0,
  },
  {
    name: "Sop Buah",
    price: "10.000",
    image: "img/sop buah.png",
    stars: 0,
  },
];

const boxContainer = document.querySelector(".box-container");

function renderDish(dish) {
  return `
      <div class="box">
        <button onclick="addStar('${dish.name}')" class="fas fa-heart"></button>
        <a href="#${dish.name
          .toLowerCase()
          .replace(" ", "-")}" class="fas fa-eye"></a>
        <img src="${dish.image}" alt="${dish.name}">
        <div class="stars">
          <i class="fas fa-star">${dish.stars}</i>
        </div>
        <h3>${dish.name}</h3>
        <span>Rp${dish.price}</span>
      </div>
    `;
}

function addStar(dishName) {
  const dish = dishes.find((d) => d.name === dishName);
  dish.stars += 1;

  const order = document.getElementById("order");
  const dishElement = order.querySelector(`[data-dish-name="${dishName}"]`);
  const starsElement = dishElement.querySelector(".stars i");
  starsElement.innerText = dish.stars;

  render();
}

function render() {
  dishes.sort((a, b) => b.stars - a.stars);
  boxContainer.innerHTML = dishes.map(renderDish).join("");
}

render();
