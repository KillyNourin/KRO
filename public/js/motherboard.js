document.addEventListener('DOMContentLoaded', function () {

    //Inisialisasi Swiper
    const swiper = new Swiper('.mySwiper', {
        
        //Slider berputar terus menerus
        loop: true,

        //Efek transisi slide
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

        //Navigasi (tombol panah) tapi ngaa bakal dipake
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

});