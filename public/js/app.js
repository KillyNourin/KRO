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

  // ✅ Dropdown behavior (klik desktop, klik dua kali di mobile)
  const dropdowns = document.querySelectorAll('.dropdown');
  dropdowns.forEach(dropdown => {
    const btn = dropdown.querySelector('.dropdown-btn');
    const menu = dropdown.querySelector('.dropdown-menu');
    let tapped = false;

    btn.addEventListener('click', (e) => {
      // Mobile mode
      if (window.innerWidth <= 768) {
        if (!tapped) {
          e.preventDefault();
          tapped = true;
          dropdown.classList.add('open');
          setTimeout(() => tapped = false, 1200);
        } else {
          tapped = false;
          dropdown.classList.remove('open');
        }
      } else {
        // Desktop mode
        e.preventDefault();
        const isOpen = menu.classList.contains('show');
        document.querySelectorAll('.dropdown-menu').forEach(m => m.classList.remove('show'));
        if (!isOpen) menu.classList.add('show');
      }
    });
  });

  // Klik di luar untuk menutup dropdown
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.dropdown')) {
      document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.remove('show'));
      document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('open'));
    }
  });
});
