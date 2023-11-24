let swiper = new Swiper('.swiper-reviews', {
    loop:true,
    effect: 'coverflow',
    grabCursor: false,
    centeredSlides: true,
    slidesPerView: 3,
    coverflowEffect: {
        rotate: 0,
        stretch: 10,
        depth: 800,
        modifier: 1,
        slideShadows : true,
    },

});

let swiper1 = new Swiper(".swiper", {
    direction: "horizontal",
    loop: true,
    slidesPerView: "auto",
    spaceBetween: -80,

    breakpoints: {
        425: {
            spaceBetween: -140,
        },
        580: {
            slidesPerView: 3,
            spaceBetween: 150,
        },
        768: {
            slidesPerView: 2.5,
            spaceBetween: 150,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 250,
        },
        1920: {
            slidesPerView: 5,
            spaceBetween: 390,
        },
    },
});