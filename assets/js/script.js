document.addEventListener("DOMContentLoaded", function () {

  // Hero Swiper
  if (document.querySelector('.hero-swiper')) {
    new Swiper('.hero-swiper', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 5000,
      },
      effect: 'fade',
      speed: 800,
    });
  }

  // Category Swiper
  if (document.querySelector('.category-swiper')) {
    new Swiper('.category-swiper', {
      slidesPerView: 8,
      spaceBetween: 10,
      loop: true,
      speed: 1500,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.category-next',
        prevEl: '.category-next-prev',
      },
      breakpoints: {
        320: { slidesPerView: 3 },
        640: { slidesPerView: 5 },
        1024: { slidesPerView: 8 },
      },
    });
  }

  // Product Swiper
  if (document.querySelector('.product-swiper')) {
    new Swiper('.product-swiper', {
      slidesPerView: 5,
      spaceBetween: 10,
      loop: true,
      autoplay: {
        delay: 3000,
      },
      navigation: {
        nextEl: '.product-next',
        prevEl: '.product-prev',
      },
      breakpoints: {
        0: { slidesPerView: 1 },
        576: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        992: { slidesPerView: 4 },
        1200: { slidesPerView: 5 },
      }
    });
  }

  // Buyers Swiper
  if (document.querySelector('.buyersSwiper')) {
    new Swiper('.buyersSwiper', {
      slidesPerView: 3,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3000,
      },
      breakpoints: {
        0: { slidesPerView: 1 },
        576: { slidesPerView: 2 },
        768: { slidesPerView: 2 },
        992: { slidesPerView: 3 },
        1200: { slidesPerView: 3 },
      },
    });
  }

  // Blog Swiper
  if (document.querySelector('.blog-carousel')) {
    new Swiper('.blog-carousel', {
      slidesPerView: 4,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 2500,
      },
      navigation: {
        nextEl: '.blog-next',
        prevEl: '.blog-prev',
      },
      breakpoints: {
        320: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        1024: { slidesPerView: 4 },
      }
    });
  }

  // Blog List Carousel in Footer
  if (document.querySelector('.blog-list-carousel')) {
    new Swiper('.blog-list-carousel', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3000,
      },
      breakpoints: {
        640: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 4 },
      }
    });
  }

  // VIP Supplier Swiper
  if (document.querySelector('.vip-supplier-carousel')) {
    new Swiper('.vip-supplier-carousel', {
      slidesPerView: 2,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        640: { slidesPerView: 3 },
        1024: { slidesPerView: 5 },
      }
    });
  }

  // Events Swiper
  if (document.querySelector('.event-swiper')) {
    new Swiper('.event-swiper', {
      slidesPerView: 2,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: { slidesPerView: 1 },
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      }
    });
  }
});

// jQuery for search box and countdown
$(function () {
  // Search box
  $('.search-box button').on('click', function () {
    const query = $(this).siblings('input').val().trim();
    if (query) {
      alert('You searched for: ' + query);
    } else {
      alert('Please enter a search term.');
    }
  });

  $('.search-box input').on('keypress', function (e) {
    if (e.which === 13) {
      $(this).siblings('button').click();
    }
  });

  // Countdown
  const deadline = new Date(2025, 4, 15, 23, 59, 59).getTime();

  const countdown = setInterval(function () {
    const now = new Date().getTime();
    const distance = deadline - now;

    if (distance < 0) {
      clearInterval(countdown);
      $('#countdown').html("<strong class='text-red-500'>Offer Expired</strong>");
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    $('#days').text(String(days).padStart(2, '0'));
    $('#hours').text(String(hours).padStart(2, '0'));
    $('#minutes').text(String(minutes).padStart(2, '0'));
    $('#seconds').text(String(seconds).padStart(2, '0'));
  }, 1000);
});
