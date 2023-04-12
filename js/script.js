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

// search
const searchInput = document.querySelector('.search-input');

searchInput.addEventListener('focus', function() {
  searchInput.parentElement.classList.add('focus');
});

searchInput.addEventListener('blur', function() {
  if (searchInput.value === '') {
    searchInput.parentElement.classList.remove('focus');
  }
});

const searchForm = document.getElementById("search-form");
searchForm.addEventListener("submit", function (event) {
  event.preventDefault();

  const searchBox = document.getElementById("search-box");
  const searchTerm = searchBox.value.toLowerCase();

  if (searchTerm === "jus alpukat" || searchTerm === "alpukat" || searchTerm === "jus") {
    document.getElementById("jus-alpukat").scrollIntoView();
  } else if (searchTerm === "jus apel" || searchTerm === "apel" || searchTerm === "jus") {
    document.getElementById("jus-apel").scrollIntoView();
  } else if (searchTerm === "jus jambu" || searchTerm === "jambu" || searchTerm === "jus") {
    document.getElementById("jus-jambu").scrollIntoView();
  } else if (searchTerm === "jus jeruk" || searchTerm === "jeruk" || searchTerm === "jus") {
    document.getElementById("jus-jeruk").scrollIntoView();
  } else if (searchTerm === "jus nanas" || searchTerm === "nanas" || searchTerm === "jus") {
    document.getElementById("jus-nanas").scrollIntoView();
  } else if (searchTerm === "jus semangka" || searchTerm === "semangka" || searchTerm === "jus") {
    document.getElementById("jus-semangka").scrollIntoView();
  } else if (searchTerm === "jus stroberi" || searchTerm === "stroberi" || searchTerm === "jus") {
    document.getElementById("jus-stroberi").scrollIntoView();
  } else if (searchTerm === "rujak buah" || searchTerm === "rujak" || searchTerm === "buah") {
    document.getElementById("rujak-buah").scrollIntoView();
  } else if (searchTerm === "salad buah" || searchTerm === "salad" || searchTerm === "buah") {
    document.getElementById("salad-buah").scrollIntoView();
  } else if (searchTerm === "sop buah" || searchTerm === "sop" || searchTerm === "buah") {
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

function updateTable() {
  // buat object XMLHttpRequest
  let xhr = new XMLHttpRequest();

  // buat request untuk mengirim data ke server
  xhr.open("POST", "proses.php");

  // atur header untuk memberitahu server bahwa data yang dikirim adalah dalam bentuk form data
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  // atur callback function untuk menangani response dari server
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // jika response sukses, update tampilan table dengan data yang dikirimkan oleh server
      document.getElementById("tableContainer").innerHTML = xhr.responseText;
    }
  };

  // kirim data form ke server
  let formData = new FormData(document.getElementById("myForm"));
  xhr.send(formData);
}
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

jumlahProduk1.addEventListener("input", function () {
  radioButtonContainer1.innerHTML = "";
  for (let i = 1; i <= jumlahProduk1.value; i++) {
    radioButtonContainer1.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman1_${i}" value="biasa" required> Biasa 
      <input type="radio" name="minuman1_${i}" value="es" required> Es
      <br>
    `;
  }
});

jumlahProduk2.addEventListener("input", function () {
  radioButtonContainer2.innerHTML = "";
  for (let i = 1; i <= jumlahProduk2.value; i++) {
    radioButtonContainer2.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman2_${i}" value="biasa" required> Biasa 
      <input type="radio" name="minuman2_${i}" value="es" required> Es
      <br>
    `;
  }
});

jumlahProduk3.addEventListener("input", function () {
  radioButtonContainer3.innerHTML = "";
  for (let i = 1; i <= jumlahProduk3.value; i++) {
    radioButtonContainer3.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman3_${i}" value="biasa" required> Biasa 
      <input type="radio" name="minuman3_${i}" value="es" required> Es
      <br>
    `;
  }
});

jumlahProduk4.addEventListener("input", function () {
  radioButtonContainer4.innerHTML = "";
  for (let i = 1; i <= jumlahProduk4.value; i++) {
    radioButtonContainer4.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman4_${i}" value="biasa" required> Biasa 
      <input type="radio" name="minuman4_${i}" value="es" required> Es
      <br>
    `;
  }
});

jumlahProduk5.addEventListener("input", function () {
  radioButtonContainer5.innerHTML = "";
  for (let i = 1; i <= jumlahProduk5.value; i++) {
    radioButtonContainer5.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman5_${i}" value="biasa" required> Biasa 
      <input type="radio" name="minuman5_${i}" value="es" required> Es
      <br>
    `;
  }
});

jumlahProduk6.addEventListener("input", function () {
  radioButtonContainer6.innerHTML = "";
  for (let i = 1; i <= jumlahProduk6.value; i++) {
    radioButtonContainer6.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman6_${i}" value="biasa" required> Biasa 
      <input type="radio" name="minuman6_${i}" value="es" required> Es
      <br>
    `;
  }
});

jumlahProduk7.addEventListener("input", function () {
  radioButtonContainer7.innerHTML = "";
  for (let i = 1; i <= jumlahProduk7.value; i++) {
    radioButtonContainer7.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman7_${i}" value="biasa" required> Biasa 
      <input type="radio" name="minuman7_${i}" value="es" required> Es
      <br>
    `;
  }
});

jumlahProduk8.addEventListener("input", function () {
  radioButtonContainer8.innerHTML = "";
  for (let i = 1; i <= jumlahProduk8.value; i++) {
    radioButtonContainer8.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman8_${i}" value="biasa" required> Biasa 
      <input type="radio" name="minuman8_${i}" value="es" required> Es
      <br>
    `;
  }
});

jumlahProduk9.addEventListener("input", function () {
  radioButtonContainer9.innerHTML = "";
  for (let i = 1; i <= jumlahProduk9.value; i++) {
    radioButtonContainer9.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman9_${i}" value="biasa" required> Biasa 
      <input type="radio" name="minuman9_${i}" value="es" required> Es
      <br>
    `;
  }
});

jumlahProduk10.addEventListener("input", function () {
  radioButtonContainer10.innerHTML = "";
  for (let i = 1; i <= jumlahProduk10.value; i++) {
    radioButtonContainer10.innerHTML += `
    Minuman ${i}: 
      <input type="radio" name="minuman10_${i}" value="biasa" required> Biasa 
      <input type="radio" name="minuman10_${i}" value="es" required> Es
      <br>
    `;
  }
});

function validateForm() {
  var jumlahProduk1 = document.getElementById("jumlahProduk1").value;
  var jumlahProduk2 = document.getElementById("jumlahProduk2").value;
  var jumlahProduk3 = document.getElementById("jumlahProduk3").value;
  var jumlahProduk4 = document.getElementById("jumlahProduk4").value;
  var jumlahProduk5 = document.getElementById("jumlahProduk5").value;
  var jumlahProduk6 = document.getElementById("jumlahProduk6").value;
  var jumlahProduk7 = document.getElementById("jumlahProduk7").value;
  var jumlahProduk8 = document.getElementById("jumlahProduk8").value;
  var jumlahProduk9 = document.getElementById("jumlahProduk9").value;
  var jumlahProduk10 = document.getElementById("jumlahProduk10").value;

  if (jumlahProduk1 === "" && jumlahProduk2 === "" && jumlahProduk3 === "" && jumlahProduk4 === "" && jumlahProduk5 === ""
  && jumlahProduk6 === "" && jumlahProduk7 === "" && jumlahProduk8 === "" && jumlahProduk9 === "" && jumlahProduk10 === "") {
    alert("Anda belum memilih produk.");
    return false;
  }

  if (jumlahProduk1 !== "" && (isNaN(jumlahProduk1) || jumlahProduk1 < 1)) {
    alert("Jumlah produk 1 tidak valid.");
    return false;
  }

  if (jumlahProduk2 !== "" && (isNaN(jumlahProduk2) || jumlahProduk2 < 1)) {
    alert("Jumlah produk 2 tidak valid.");
    return false;
  }

  if (jumlahProduk3 !== "" && (isNaN(jumlahProduk3) || jumlahProduk3 < 1)) {
    alert("Jumlah produk 3 tidak valid.");
    return false;
  }

  if (jumlahProduk4 !== "" && (isNaN(jumlahProduk4) || jumlahProduk4 < 1)) {
    alert("Jumlah produk 4 tidak valid.");
    return false;
  }

  if (jumlahProduk5 !== "" && (isNaN(jumlahProduk5) || jumlahProduk5 < 1)) {
    alert("Jumlah produk 5 tidak valid.");
    return false;
  }

  if (jumlahProduk6 !== "" && (isNaN(jumlahProduk6) || jumlahProduk6 < 1)) {
    alert("Jumlah produk 6 tidak valid.");
    return false;
  }

  if (jumlahProduk7 !== "" && (isNaN(jumlahProduk7) || jumlahProduk7 < 1)) {
    alert("Jumlah produk 7 tidak valid.");
    return false;
  }

  if (jumlahProduk8 !== "" && (isNaN(jumlahProduk8) || jumlahProduk8 < 1)) {
    alert("Jumlah produk 8 tidak valid.");
    return false;
  }

  if (jumlahProduk9 !== "" && (isNaN(jumlahProduk9) || jumlahProduk9 < 1)) {
    alert("Jumlah produk 9 tidak valid.");
    return false;
  }

  if (jumlahProduk10 !== "" && (isNaN(jumlahProduk10) || jumlahProduk10 < 1)) {
    alert("Jumlah produk 10 tidak valid.");
    return false;
  }
}

// validasi
const form = document.querySelector("form");
form.addEventListener("submit", function (e) {
  const radios = document.querySelectorAll('input[type="radio"]');
  let checked = false;
  for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      checked = true;
      break;
    }
  }
  // check if the form being submitted is the search form
  if (e.target.id !== 'search-form' && !checked) {
    alert("Please select one of these options.");
    e.preventDefault();
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
// Mendapatkan elemen loader dan konten
const loader = document.querySelector('.loader');
const content = document.querySelector('.content');

// Menunggu konten selesai dimuat
window.addEventListener('load', function() {
  // Menghilangkan elemen loader setelah konten selesai dimuat
  loader.style.display = 'none';
  content.style.display = 'block';
});

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
