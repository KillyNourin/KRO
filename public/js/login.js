document.addEventListener('DOMContentLoaded', function () {
  const popupWrapper = document.querySelector('.auth-popup-wrapper');
  const authPopup = document.querySelector('.auth-popup');
  const closeBtn = document.querySelector('.auth-close');
  const loginForm = authPopup?.querySelector('.login-form');
  const registerForm = authPopup?.querySelector('.register-form');

  console.log('✅ login.js loaded');

  // === Switch Login <-> Register ===
  document.querySelectorAll('.switch-to-register').forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      loginForm?.classList.remove('active');
      registerForm?.classList.add('active');
    });
  });

  document.querySelectorAll('.switch-to-login').forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      registerForm?.classList.remove('active');
      loginForm?.classList.add('active');
    });
  });

  // === Open Popup via .join-btn ===
  document.querySelectorAll('.join-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      if (popupWrapper) {
        popupWrapper.classList.remove('hidden');
        loginForm?.classList.add('active');
        registerForm?.classList.remove('active');
      }
    });
  });

  // === Close Popup ===
  closeBtn?.addEventListener('click', () => {
    popupWrapper?.classList.add('hidden');
  });

  window.addEventListener('click', (e) => {
    if (e.target === popupWrapper) {
      popupWrapper?.classList.add('hidden');
    }
  });

  // === Toggle Show/Hide Password ===
  document.querySelectorAll(".eye-icon").forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
      const passwordField = eyeIcon.closest(".input-field")?.querySelector(".password");
      if (passwordField) {
        const isHidden = passwordField.type === "password";
        passwordField.type = isHidden ? "text" : "password";
        eyeIcon.classList.replace(isHidden ? "bx-hide" : "bx-show", isHidden ? "bx-show" : "bx-hide");
      }
    });
  });
});
