document.addEventListener("DOMContentLoaded", function () {
  // Tab Navigasi: Deskripsi & Spesifikasi
  const tabBtns = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-pane");

  tabBtns.forEach(btn => {
    btn.addEventListener("click", function () {
      const target = this.dataset.tab;

      // Reset semua tab & konten
      tabBtns.forEach(b => b.classList.remove("active"));
      tabContents.forEach(pane => pane.classList.remove("active"));

      // Aktifkan yang dipilih
      this.classList.add("active");
      const activePane = document.getElementById(target);
      if (activePane) activePane.classList.add("active");
    });
  });

  // Tombol Pilihan Warna
  const colorBtns = document.querySelectorAll(".color-btn");
  colorBtns.forEach(btn => {
    btn.addEventListener("click", function () {
      colorBtns.forEach(b => b.classList.remove("active"));
      this.classList.add("active");
    });
  });

  // Subtotal Kalkulasi
  const priceElement = document.querySelector(".price");
  const qtyInput = document.querySelector(".qty-input");
  const subtotal = document.querySelector(".subtotal");

  if (priceElement && qtyInput && subtotal) {
    const price = parseInt(priceElement.textContent.replace(/[^\d]/g, "")) || 0;

    const updateSubtotal = () => {
      const qty = parseInt(qtyInput.value) || 1;
      subtotal.innerText = `Subtotal: Rp ${new Intl.NumberFormat("id-ID").format(price * qty)}`;
    };

    qtyInput.addEventListener("input", updateSubtotal);

    // Inisialisasi saat load
    updateSubtotal();
  }
});
