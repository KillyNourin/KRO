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
  });
});