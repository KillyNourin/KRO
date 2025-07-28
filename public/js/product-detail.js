// public/js/product-detail.js
document.addEventListener("DOMContentLoaded", function () {
  const mainImg = document.querySelector(".main-img");
  const galleryImgs = document.querySelectorAll(".gallery img");

  galleryImgs.forEach(img => {
    img.addEventListener("click", function () {
      // Ganti src dari main image
      mainImg.src = this.src;

      // Tambahkan efek aktif di thumbnail yang diklik
      galleryImgs.forEach(i => i.classList.remove("active-thumb"));
      this.classList.add("active-thumb");
    });
  });
});