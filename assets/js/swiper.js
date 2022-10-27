import Swiper, { Autoplay, Navigation, Pagination } from "swiper";

if (document.querySelector(".blog .swiper")) {
  const blogSwiper = new Swiper(".blog .swiper", {
    modules: [Pagination],

    spaceBetween: 40,
    slidesPerView: 4,
    speed: 400,
    loop: false,

    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },

    breakpoints: {
      360: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });
}

if (document.querySelector(".swiper-auto")) {
  const galleryAutoSwiper = new Swiper(".swiper-auto", {
    spaceBetween: 40,
    slidesPerView: 1,
    speed: 400,
    slideClass: "wp-block-image",

    modules: [Autoplay],

    autoplay: {
      delay: 2000,
    },
  });
}

if (document.querySelector(".swiper-gallery")) {
  const gallerySwiper = new Swiper(".swiper-gallery", {
    spaceBetween: 40,
    slidesPerView: 5,
    speed: 600,
    slideClass: "wp-block-image",

    modules: [Autoplay, Navigation],

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    autoplay: {
      delay: 2000,
    },

    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 5,
      },
    },
  });
}
