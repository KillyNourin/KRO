// Tambahkan animasi fade out saat klik link
document.addEventListener('DOMContentLoaded', () => {
  document.body.classList.add('loaded');

  const links = document.querySelectorAll('a[href]');
  links.forEach(link => {
    link.addEventListener('click', function(e) {
      if (!this.getAttribute('href').startsWith('#') && this.getAttribute('target') !== '_blank') {
        e.preventDefault();
        document.body.classList.add('fade-out');
        setTimeout(() => {
          window.location.href = this.href;
        }, 400);
      }
    });
  });

  // Dropdown Visa
  const cardDrop = document.getElementById('card-dropdownn');
  const dropdownBtn = cardDrop.querySelector('.dropdownn-btn');
  const dropdownSelect = cardDrop.querySelector('.dropdownn-select');
  const currentCard = document.getElementById('current-card');
  const creditImg = document.getElementById('credit-card-image');

  let activeDropdownn = null;

  dropdownBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    dropdownSelect.classList.toggle('visible');
    activeDropdownn = dropdownSelect.classList.contains('visible') ? dropdownSelect : null;
  });

  dropdownSelect.querySelectorAll('li').forEach(item => {
    item.addEventListener('click', () => {
      const selected = item.textContent.trim();

      // Ganti gambar kartu
      if (selected === 'Master Card') {
        creditImg.src = 'https://dl.dropboxusercontent.com/s/2vbqk5lcpi7hjoc/MasterCard_Logo.svg.png';
      } else if (selected === 'American Express') {
        creditImg.src = 'https://dl.dropboxusercontent.com/s/f5hyn6u05ktql8d/amex-icon-6902.png';
      } else if (selected === 'Visa') {
        creditImg.src = 'https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png';
      }

      // Tukar teks
      const old = currentCard.textContent;
      currentCard.textContent = selected;
      item.textContent = old;

      dropdownSelect.classList.remove('visible');
      activeDropdownn = null;
    });
  });

  // Tutup dropdown jika klik di luar
  window.addEventListener('click', function(e) {
    if (activeDropdownn && !cardDrop.contains(e.target)) {
      dropdownSelect.classList.remove('visible');
      activeDropdownn = null;
    }
  });
});
