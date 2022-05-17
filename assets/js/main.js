// Загальна функція коли html прогрузився
$(document).ready(function() {
    /* Плавная прокрутка меню */
    $('.header a[href^="#"]').click(function() {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        },500);
        $('.header a[href^="#"]').parent().removeClass('active');
        $(this).parent().addClass('active');
        $('.menu__mobile .menu').toggle(500);
        $('.menu__burger').toggleClass('close');
        return false;
    });
      // Плавна прокрутка накнопку
      $('.header__content a[href^="#"]').click(function() {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        },500);
        return false;
    });


    /* Мобильное меню */
    $('.menu__burger').click(function() {
        $('.menu__mobile .menu').toggle(500);
        $(this).toggleClass('close');
    });

    // Слайдер
    let swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
          delay: 5000,
        },
  // Responsive breakpoints
    breakpoints: {
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
    },
    // when window width is >= 769px
    769: {
      slidesPerView: 2,
    },
    // when window width is >= 960px
    960: {
      slidesPerView: 3,
    },
  },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

    //   кнопка вверх
    let btn = $('#top_button');
$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
});