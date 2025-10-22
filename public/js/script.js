// Tambahkan animasi fade out saat klik link
document.addEventListener('DOMContentLoaded', () => {
  document.body.classList.add('loaded');

  const links = document.querySelectorAll('a[href]');
  links.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      document.body.classList.add('fade-out');
      setTimeout(() => {
        window.location.href = this.href;
      }, 400);
    });
  });

  // Tab Menu Switcher
  const menuButtons = document.querySelectorAll('.menu-button');
  const contents = document.querySelectorAll('.menu-content');
  menuButtons.forEach(button => {
    button.addEventListener('click', () => {
      menuButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
      const target = button.getAttribute('data-menu');
      contents.forEach(content => {
        content.classList.remove('active');
        if (content.id === target) {
          content.classList.add('active');
        }
      });
    });
  });

  // Infinite Scroll Grid
  const scrollGrid = document.getElementById('scroll-grid');
  if (scrollGrid) {
    const initialItems = Array.from(scrollGrid.children);
    function duplicateItems(times = 1) {
      for (let i = 0; i < times; i++) {
        initialItems.forEach(item => {
          const clone = item.cloneNode(true);
          scrollGrid.appendChild(clone);
        });
      }
    }
    duplicateItems(1);
  }
});
// login popup
document.addEventListener('DOMContentLoaded', function () {
  const popupWrapper = document.querySelector('.auth-popup-wrapper');
  const authPopup = document.querySelector('.auth-popup');
  const joinButton = document.querySelector('.join-btn');
  const closeBtn = document.querySelector('.auth-close');

  const loginForm = authPopup.querySelector('.login-form');
  const registerForm = authPopup.querySelector('.register-form');
  const switchToRegister = authPopup.querySelector('.switch-to-register');
  const switchToLogin = authPopup.querySelector('.switch-to-login');

  if (joinButton && popupWrapper && loginForm && registerForm) {
    joinButton.addEventListener('click', () => {
      popupWrapper.classList.remove('hidden');
      loginForm.classList.add('active');
      registerForm.classList.remove('active');
    });

    closeBtn.addEventListener('click', () => {
      popupWrapper.classList.add('hidden');
    });

    switchToRegister.addEventListener('click', (e) => {
      e.preventDefault();
      loginForm.classList.remove('active');
      registerForm.classList.add('active');
    });

    switchToLogin.addEventListener('click', (e) => {
      e.preventDefault();
      registerForm.classList.remove('active');
      loginForm.classList.add('active');
    });

    // Password toggle
    document.querySelectorAll(".eye-icon").forEach(eyeIcon => {
      eyeIcon.addEventListener("click", () => {
        const passwordFields = eyeIcon.closest(".input-field").querySelectorAll(".password");
        passwordFields.forEach(password => {
          if (password.type === "password") {
            password.type = "text";
            eyeIcon.classList.replace("bx-hide", "bx-show");
          } else {
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
          }
        });
      });
    });

    window.addEventListener('click', (e) => {
      if (e.target === popupWrapper) {
        popupWrapper.classList.add('hidden');
      }
    });
  }

// DOTS + DRAG

// Logika untuk TAB (Gaming, PC, dll)
document.querySelectorAll('.menu-button').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.menu-button').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.menu-content').forEach(content => content.classList.remove('active'));
        
        const menuId = button.dataset.menu;
        button.classList.add('active');
        document.getElementById(menuId).classList.add('active');
    });
});


// Logika CAROUSEL
document.querySelectorAll('.menu-content').forEach(menu => {
    // Ambil semua elemen penting
    const carousel = menu.querySelector('.carousel');
    const track = menu.querySelector('.carousel-track');
    const dotsContainer = menu.querySelector('.carousel-dots');
    const cards = track.querySelectorAll('.product-card');

    if (!carousel || !track || !dotsContainer || cards.length === 0) {
        return;
    }

    // Variabel untuk status carousel
    let currentPage = 0;
    let totalPages = 0;
    let carouselWidth = 0;
    let currentPosition = 0; // Posisi translateX saat ini (dalam px)

    // Variabel untuk status drag
    let isDragging = false;
    let startX = 0;
    let dragAmount = 0;
    let currentDragPosition = 0;

    // FUNGSI UTAMA 

    function setupCarousel() {
        carouselWidth = carousel.offsetWidth;
        if (carouselWidth === 0) return;

        const trackWidth = track.scrollWidth;
        totalPages = Math.ceil(trackWidth / carouselWidth);
        
        dotsContainer.innerHTML = ''; // Kosongkan dots
        
        if (totalPages <= 1) {
            track.style.transform = 'translateX(0px)';
            return; 
        }

        // Buat dots
        for (let i = 0; i < totalPages; i++) {
            const dot = document.createElement('button');
            dot.classList.add('dot');
            dot.dataset.page = i;
            
            if (i === 0) dot.classList.add('active');
            
            // Event klik dot
            dot.addEventListener('click', () => {
                currentPage = i;
                updateCarousel(); // Panggil fungsi snap
            });
            
            dotsContainer.appendChild(dot);
        }
        
        currentPage = 0;
        currentPosition = 0;
        updateCarousel(); // Panggil untuk set posisi awal
    }

    /**
     * Fungsi "Snap"
     * Ini adalah fungsi utama untuk pindah halaman dan update dots.
     */
    function updateCarousel() {
        // Hitung posisi 'snap' (tujuan) berdasarkan halaman saat ini
        let targetPosition = currentPage * carouselWidth;
        const maxPosition = track.scrollWidth - carouselWidth;

        // Jangan geser melebihi batas
        if (targetPosition > maxPosition) targetPosition = maxPosition;
        if (targetPosition < 0) targetPosition = 0;

        // Set posisi global
        currentPosition = targetPosition;
        
        // Terapkan 'snap' dengan transisi
        track.style.transition = 'transform 0.4s ease-in-out';
        track.style.transform = `translateX(-${currentPosition}px)`;

        // Update dot yang aktif
        dotsContainer.querySelectorAll('.dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentPage);
        });
    }

    // FUNGSI DRAG

    function startDrag(e) {
        // Abaikan jika user mengklik tombol "Buy"
        if (e.target.tagName === 'BUTTON' || e.target.tagName === 'A' || e.target.closest('button') || e.target.closest('a')) {
            return;
        }
        
        // Abaikan jika ini klik kanan
        if (e.button === 2) {
          return;
        }

        isDragging = true;
        startX = (e.type === 'touchstart' ? e.touches[0].pageX : e.pageX) - track.offsetLeft;
        currentDragPosition = currentPosition;
        
        track.style.transition = 'none'; // Hapus transisi agar drag instan
        track.style.cursor = 'grabbing';
        
        // Mencegah 'preventDefault' hanya jika diperlukan (untuk touch)
        if (e.type === 'touchstart') {
            e.preventDefault();
        } else {
            // Mencegah browser men-drag gambar (untuk mouse)
            e.preventDefault();
        }


        // --- ⬇️ PERUBAHAN UTAMA ⬇️ ---
        // Daftarkan event di 'document' agar tidak "sticky"
        if (e.type === 'mousedown') {
            document.addEventListener('mousemove', doDrag);
            document.addEventListener('mouseup', endDrag);
        }
    }

    function doDrag(e) {
        if (!isDragging) return;
        
        // Mencegah scroll halaman di mobile saat menggeser carousel
        if (e.type === 'touchmove') {
            e.preventDefault();
        }

        const currentX = (e.type === 'touchmove' ? e.touches[0].pageX : e.pageX) - track.offsetLeft;
        dragAmount = currentX - startX;
        let newPosition = currentDragPosition - dragAmount;
        
        track.style.transform = `translateX(-${newPosition}px)`;
    }

    function endDrag(e) {
        if (!isDragging) return;
        isDragging = false;
        
        track.style.cursor = 'grab'; // Kembalikan kursor
        track.style.transition = 'transform 0.4s ease-in-out'; // Kembalikan transisi
        
        // Tentukan posisi akhir
        currentPosition = currentDragPosition - dragAmount;
        
        // Tentukan halaman (dot) mana yang paling dekat
        let newPage = Math.round(currentPosition / carouselWidth);
        
        // Batasi agar tidak keluar index
        if (newPage < 0) newPage = 0;
        if (newPage >= totalPages) newPage = totalPages - 1;
        
        currentPage = newPage;
        updateCarousel(); // Panggil fungsi snap untuk merapikan

        // Hapus event dari 'document' setelah drag selesai
        if (e.type === 'mouseup') {
            document.removeEventListener('mousemove', doDrag);
            document.removeEventListener('mouseup', endDrag);
        }
    }

    // Daftarkan Event Listeners

    // Mouse event (HANYA 'mousedown')
    track.addEventListener('mousedown', startDrag);
    // 'mousemove' dan 'mouseup' sekarang di-handle di dalam startDrag/endDrag

    // Touch events
    // passive: false diperlukan karena kita memanggil preventDefault()
    track.addEventListener('touchstart', startDrag, { passive: false });
    track.addEventListener('touchmove', doDrag, { passive: false });
    track.addEventListener('touchend', endDrag);
    track.addEventListener('touchcancel', endDrag); // Jika sentuhan dibatalkan

    // Observer (dari kode sebelumnya, ini PENTING)
    const observer = new ResizeObserver(entries => {
        if (entries[0].target.offsetWidth > 0) {
            setupCarousel();
        }
    });
    observer.observe(menu);
    
    // Setup ulang saat ukuran window berubah
    window.addEventListener('resize', setupCarousel);
});

});