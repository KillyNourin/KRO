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
