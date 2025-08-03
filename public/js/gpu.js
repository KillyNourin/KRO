document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.mySwiper', {
        
        //Slider bakalan ngeloop
        loop: true,

        //Transisi slide
        effect: 'slide',

        //Kecepatan transisi antar slide
        speed: 1200, //1.2 detik  

        //Bakal slide otomatis
        autoplay: {
          delay: 2000, //Pindah setiap 2 detik
          disableOnInteraction: false, //Tetap jalan walau di-klik
        },

        //Slider bawah yang bulat
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        //! Navigasi (tombol panah) tapi ngaa bakal dipake
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

        const interactiveItems = document.querySelectorAll('.interactive-item');

    //Loop melalui setiap item yang ditemukan
    interactiveItems.forEach(item => {
        //! Di dalam setiap item bakalan mencari tombol plus dan popup-nya
        const plusButton = item.querySelector('.plus-button');
        const infoPopup = item.querySelector('.info-popup');

        //Kedua elemen (tombol dan popup) ada sebelum melanjutkan
        if (plusButton && infoPopup) {
            //Menambahkan event listener untuk tombol plus
            //! Fungsinya untuk menampilkan atau menyembunyikan popup saat tombol diklik
            plusButton.addEventListener('click', (event) => {
                // Mencegah event 'click' menyebar ke elemen lain (seperti document)
                // Ini penting biar popup tidak langsung tertutup saat tombolnya diklik.
                event.stopPropagation();
                
                //Mengecek apakah popup yang diklik ini sedang terlihat atau tidak
                const isCurrentlyVisible = infoPopup.classList.contains('is-visible');

                //Menutup semua popup yang sedang terlihat
                //Ini untuk memastikan hanya satu popup yang terlihat pada satu waktu.
                document.querySelectorAll('.info-popup').forEach(p => {
                    p.classList.remove('is-visible');
                });
                
                //Jika popup tidak terlihat, maka tampilkan popup ini
                //Jika sudah terlihat, maka sembunyikan popup ini
                if (!isCurrentlyVisible) {
                    infoPopup.classList.add('is-visible');
                }
            });
        }
    });

    //Menambahkan event listener ke seluruh halaman (document)
    //! Fungsinya untuk menutup popup yang aktif jika pengguna mengklik di area mana pun di luar popup.
    document.addEventListener('click', function() {
        document.querySelectorAll('.info-popup.is-visible').forEach(popup => {
            popup.classList.remove('is-visible');
        });
    });

        function initSlider(sliderElement) {
            const handle = sliderElement.querySelector('.slider-handle');
            const imageClipper = sliderElement.querySelector('.image-clipper');
            const labelOff = sliderElement.querySelector('.label-off');
            const labelOn = sliderElement.querySelector('.label-on');
            
            let isDragging = false;

            // Fungsi untuk menggerakkan slider
            function moveSlider(x) {
                const sliderRect = sliderElement.getBoundingClientRect();
                let newX = x - sliderRect.left;

                // Batasi pergerakan di dalam container
                if (newX < 0) newX = 0;
                if (newX > sliderRect.width) newX = sliderRect.width;

                const percentage = (newX / sliderRect.width) * 100;

                handle.style.left = percentage + '%';
                imageClipper.style.width = percentage + '%';

                // Logika untuk menyembunyikan/menampilkan label
                if (labelOff) {
                    labelOff.style.opacity = percentage < 5 ? '0' : '1';
                }
                if (labelOn) {
                    labelOn.style.opacity = percentage > 95 ? '0' : '1';
                }
            }
            
            function onDragStart(e) {
                isDragging = true;
                //!Mencegah seleksi teks saat dragging
                e.preventDefault();
                // Menambahkan event listener ke seluruh dokumen
                document.addEventListener('mousemove', onDragging);
                document.addEventListener('touchmove', onDragging, { passive: false });
                document.addEventListener('mouseup', onDragEnd);
                document.addEventListener('touchend', onDragEnd);
            }

            function onDragging(e) {
                if (!isDragging) return;
                // Menentukan posisi dari mouse atau sentuhan
                const clientX = e.touches ? e.touches[0].clientX : e.clientX;
                moveSlider(clientX);
            }

            function onDragEnd() {
                isDragging = false;
                // Menghapus event listener dari dokumen
                document.removeEventListener('mousemove', onDragging);
                document.removeEventListener('touchmove', onDragging);
                document.removeEventListener('mouseup', onDragEnd);
                document.removeEventListener('touchend', onDragEnd);
            }

            // Memulai dragging
            sliderElement.addEventListener('mousedown', onDragStart);
            sliderElement.addEventListener('touchstart', onDragStart);
        }

        // Inisialisasi setiap slider yang ada di halaman
        document.querySelectorAll('.comparison-slider').forEach(initSlider);
});