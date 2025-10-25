document.addEventListener('DOMContentLoaded', () => {
  // Fade transition
  document.body.classList.add('loaded');
  const links = document.querySelectorAll('a[href]');
  links.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      document.body.classList.add('fade-out');
      setTimeout(() => window.location.href = this.href, 400);
    });
  });

  // Popup login handler
  const popupWrapper = document.querySelector('.auth-popup-wrapper');
  const authPopup = document.querySelector('.auth-popup');
  const joinButton = document.querySelector('.join-btn');
  const closeBtn = document.querySelector('.auth-close');
  const loginForm = authPopup?.querySelector('.login-form');
  const registerForm = authPopup?.querySelector('.register-form');
  const switchToRegister = authPopup?.querySelector('.switch-to-register');
  const switchToLogin = authPopup?.querySelector('.switch-to-login');

  if (joinButton && popupWrapper && loginForm && registerForm) {
    joinButton.addEventListener('click', () => {
      popupWrapper.classList.remove('hidden');
      loginForm.classList.add('active');
      registerForm.classList.remove('active');
    });
    closeBtn?.addEventListener('click', () => popupWrapper.classList.add('hidden'));
    switchToRegister?.addEventListener('click', e => {
      e.preventDefault(); loginForm.classList.remove('active'); registerForm.classList.add('active');
    });
    switchToLogin?.addEventListener('click', e => {
      e.preventDefault(); registerForm.classList.remove('active'); loginForm.classList.add('active');
    });
  }

  // Hamburger toggle
  const hamburger = document.getElementById('hamburger-btn');
  const navMenu = document.getElementById('nav-menu');
  if (hamburger && navMenu)
    hamburger.addEventListener('click', () => navMenu.classList.toggle('show'));

  // ✅ Dropdown toggle fix — klik dua kali di mobile, hover di desktop
const dropdownButtons = document.querySelectorAll('.dropdown > .dropdown-btn');

dropdownButtons.forEach(btn => {
  let firstClick = false;

  btn.addEventListener('click', (e) => {
    const menu = btn.nextElementSibling;

    if (window.innerWidth <= 768) {
      // Mobile — klik pertama buka menu, klik kedua pilih item
      if (!menu.classList.contains('show') && !firstClick) {
        e.preventDefault();
        firstClick = true;
        menu.classList.add('show');
        setTimeout(() => firstClick = false, 800); // reset klik setelah 0.8 detik
      } else {
        menu.classList.remove('show');
      }
    } else {
      // Desktop — toggle dengan klik (opsional selain hover)
      e.preventDefault();
      menu.classList.toggle('show');
    }
  });
});

// Tutup dropdown jika klik di luar
document.addEventListener('click', (e) => {
  if (!e.target.closest('.dropdown')) {
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
      menu.classList.remove('show');
    });
  }
});
});
