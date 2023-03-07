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