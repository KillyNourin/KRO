document.addEventListener('DOMContentLoaded', function () {
  // Fade in body saat page load
  document.body.classList.add('loaded');

  // Optional: Fade out saat klik link ke page lain
  document.querySelectorAll('a').forEach(function (el) {
    el.addEventListener('click', function (e) {
      // Hanya fade out jika link menuju page lain
      if (el.href && el.target !== '_blank' && !el.href.includes('#')) {
        e.preventDefault();
        document.body.classList.remove('loaded');
        document.body.classList.add('fade-out');
        setTimeout(function () {
          window.location = el.href;
        }, 400); // waktu fade-out sesuai CSS
      }
    });
  });
});