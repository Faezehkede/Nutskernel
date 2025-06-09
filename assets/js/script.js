// Add header and footer to pages 

// document.addEventListener("DOMContentLoaded", function () {
//   fetch("components/header.html")
//     .then(res => res.text())
//     .then(data => document.getElementById("header").innerHTML = data);

//   fetch("components/footer.html")
//     .then(res => res.text())
//     .then(data => document.getElementById("footer").innerHTML = data);
// });

// Swiper slider
document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.hero-swiper', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 5000,
    },    
    effect: 'fade',
    speed: 800,
  });
});

// jQuery for search box
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

// Category carousel section
const categorySwiper = new Swiper('.category-swiper', {
    slidesPerView: 8,
    spaceBetween: 10,
    speed: 1500,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      320: { slidesPerView: 3 },
      640: { slidesPerView: 5 },
      1024: { slidesPerView: 8 },
    },
});

// Product swiper
const productcarousel = new Swiper('.product-swiper', {
    slidesPerView: 5,
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 3000,
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      1200: { slidesPerView: 5 },
      992: { slidesPerView: 4 },
      768: { slidesPerView: 3 },
      576: { slidesPerView: 2 },
      0: { slidesPerView: 1 },
    }
});

// buyers info
const buyersSwiper = new Swiper('.buyersSwiper', {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000,
    },
    breakpoints: {
      1200: { slidesPerView: 3 },
      992: { slidesPerView: 3 },
      768: { slidesPerView: 2 },
      576: { slidesPerView: 2 },
      0: { slidesPerView: 1 },
    },
});

// blog swiper
const blogSwiper = new Swiper('.blog-carousel', {
  slidesPerView: 4,
  spaceBetween: 20,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay: {
    delay: 2500,
  },
  breakpoints: {
    320: { slidesPerView: 2 },
    768: { slidesPerView: 3 },
    1024: { slidesPerView: 4 },
  }
});

// Single Product Countdown
$(function () {
  // Set deadline (Year, Month-1, Day, Hour, Minute, Second)
  var deadline = new Date(2025, 4, 15, 23, 59, 59).getTime(); // May 15, 2025, 11:59:59 PM

  var countdown = setInterval(function () {
    var now = new Date().getTime();
    var distance = deadline - now;

    if (distance < 0) {
      clearInterval(countdown);
      $('#countdown').html("<strong class='text-red-500'>Offer Expired</strong>");
      return;
    }

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    $('#days').text(String(days).padStart(2, '0'));
    $('#hours').text(String(hours).padStart(2, '0'));
    $('#minutes').text(String(minutes).padStart(2, '0'));
    $('#seconds').text(String(seconds).padStart(2, '0'));
  }, 1000);
});

// blog list carousel on footer

const swiper = new Swiper('.blog-list-carousel', {
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

// VIP Supplier

const vipSwiper = new Swiper('.vip-supplier-carousel', {
  slidesPerView: 2,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 3
    },
    1024: {
      slidesPerView: 5
    }
  }
});

// Events Slider

const eventsSwiper = new Swiper('.event-swiper', {
  slidesPerView: 2,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    320: { 
      slidesPerView: 1
    },
    640: {
      slidesPerView: 2
    },
    1024: {
      slidesPerView: 3
    }
  }
});