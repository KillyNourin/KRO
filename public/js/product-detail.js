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

  // for Tab Switching
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');

    tabBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        tabBtns.forEach(b => b.classList.remove('active'));
        tabPanes.forEach(p => p.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById(btn.dataset.tab).classList.add('active');
      });
    });
// Update subtotal when quantity changes
      const price = 25999000;
  const qtyInput = document.querySelector('.qty-input');
  const subtotal = document.querySelector('.subtotal');

  qtyInput.addEventListener('input', () => {
    const qty = parseInt(qtyInput.value) || 1;
    subtotal.innerText = `Subtotal: Rp ${new Intl.NumberFormat('id-ID').format(price * qty)}`;
  });


// Function to show the selected tab
   function showTab(tabId) {
  const tabs = document.querySelectorAll('.tab-content');
  const buttons = document.querySelectorAll('.tab-nav button');

  tabs.forEach(t => t.style.display = 'none');
  buttons.forEach(b => b.classList.remove('active'));

  document.getElementById(tabId).style.display = 'block';
  event.currentTarget.classList.add('active');
}


// Tmbol pilihan warna
  const colorButtons = document.querySelectorAll('.color-btn');
  colorButtons.forEach(btn => {
    btn.addEventListener('click', function () {
      colorButtons.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
    });
  });