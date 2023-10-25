var slider1 = new Swiper(".slider-proximos-eventos", {
  slidesPerView: 3,
  spaceBetween: 20,
  centerSlide: 'true',
  fade: 'true',
  grabCursor: true,
  pagination: {
    el: ".pagination-proximos-eventos",
    clickable: true,
  },
  navigation: {
    nextEl: ".next-proximos-eventos",
    prevEl: ".prev-proximos-eventos",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    950: {
      slidesPerView: 3,
    },
  },
});

var slider2 = new Swiper(".slider-nossos-ibefianos", {
  slidesPerView: 3,
  spaceBetween: 20,
  centerSlide: "true",
  fade: "true",
  grabCursor: true,
  pagination: {
    el: ".pagination-nossos-ibefianos",
    clickable: true,
  },
  navigation: {
    nextEl: ".next-nossos-ibefianos",
    prevEl: ".prev-nossos-ibefianos",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    950: {
      slidesPerView: 3,
    },
  },
});
