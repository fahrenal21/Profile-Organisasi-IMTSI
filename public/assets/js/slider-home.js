document.addEventListener('DOMContentLoaded', function () {
    const myCarousel = document.querySelector('#carouselExample');
    const carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000, // Ganti gambar otomatis setiap 5 detik
        wrap: true,     // Memungkinkan carousel untuk memutar ulang
    });
});