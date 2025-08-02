document.addEventListener("DOMContentLoaded", function () {
  // Navigasi Tab Deskripsi / Spesifikasi
  const tabBtns = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-pane");

  tabBtns.forEach(btn => {
    btn.addEventListener("click", function () {
      const target = this.dataset.tab;

      tabBtns.forEach(b => b.classList.remove("active"));
      tabContents.forEach(pane => pane.classList.remove("active"));

      this.classList.add("active");
      const activePane = document.getElementById(target);
      if (activePane) activePane.classList.add("active");
    });
  });

  // Pilihan Warna
  const colorBtns = document.querySelectorAll(".color-btn");
  colorBtns.forEach(btn => {
    btn.addEventListener("click", function () {
      colorBtns.forEach(b => b.classList.remove("active"));
      this.classList.add("active");
    });
  });

  // Kalkulasi Subtotal
  const priceElement = document.querySelector(".price");
  const qtyInput = document.querySelector(".qty-input");
  const subtotal = document.querySelector(".subtotal");

  if (priceElement && qtyInput && subtotal) {
    const price = parseInt(priceElement.textContent.replace(/[^\d]/g, "")) || 0;

    const updateSubtotal = () => {
      const qty = parseInt(qtyInput.value) || 1;
      const sub = price * qty;
      subtotal.innerText = `Subtotal: Rp ${new Intl.NumberFormat("id-ID").format(sub)}`;
    };

    qtyInput.addEventListener("input", updateSubtotal);
    updateSubtotal(); // inisialisasi
  }

  // Tambah ke Keranjang
  const cartBtn = document.querySelector('.cart-product-btn');

  if (cartBtn) {
    cartBtn.addEventListener('click', function () {
      const qty = parseInt(document.querySelector('.qty-input')?.value || 1);

      const data = {
        id: this.dataset.id,
        name: this.dataset.name,
        price: this.dataset.price,
        qty: qty,
        img: this.dataset.img
      };

      // Debug
      console.log("Kirim ke keranjang:", data);

      // Validasi minimal
      if (!data.id || !data.name || !data.price) {
        alert("Data produk tidak lengkap.");
        return;
      }

      fetch('/keranjang/tambah', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content
        },
        body: JSON.stringify(data)
      })
        .then(res => res.json())
        .then(resData => {
          if (resData.success) {
            window.location.href = '/checkout';
          } else {
            alert("Gagal menambahkan ke keranjang.");
          }
        })
        .catch(err => {
          console.error("Gagal fetch / parsing JSON:", err);
          alert("Terjadi kesalahan saat mengirim data ke server.");
        });
    });
  }
});
