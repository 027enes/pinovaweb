let hamburgerBtn = document.getElementById('hamburgerBtn');
let navigation = document.getElementById('navigationClick');
let hamburgerline = document.getElementById('line');
hamburgerBtn.addEventListener('click', () => {
    hamburgerBtn.classList.toggle('active');
    navigation.classList.toggle('active');
    line.classList.toggle('active');
});

var swiper = new Swiper(".hSlider", {
    loop: true,
    speed: 1000,
    watchSlidesProgress: true,
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    on: {
        init: function() {
            // Başlangıç animasyonu için
            let swiper = this;
            swiper.slides.forEach(slide => {
                let slideText = slide.querySelector(".swiper-slide-text");
                slideText.style.opacity = 0;
                slideText.style.transform = "translateY(20px)";
                slideText.style.transition = "opacity 0.5s ease, transform 0.5s ease";
            });
            setTimeout(() => {
                let currentSlideText = swiper.slides[swiper.activeIndex].querySelector(".swiper-slide-text");
                if(currentSlideText) {
                    currentSlideText.style.opacity = 1;
                    currentSlideText.style.transform = "translateY(0)";
                }
            }, 100); // Gecikme süresi
        },
        slideChangeTransitionStart: function() {
            let swiper = this;
            let currentSlideText = swiper.slides[swiper.activeIndex].querySelector(".swiper-slide-text");
            if(currentSlideText) {
                currentSlideText.style.opacity = 0;
                currentSlideText.style.transform = "translateY(20px)";
            }
        },
        slideChangeTransitionEnd: function() {
            let swiper = this;
            let currentSlideText = swiper.slides[swiper.activeIndex].querySelector(".swiper-slide-text");
            if(currentSlideText) {
                currentSlideText.style.opacity = 1;
                currentSlideText.style.transform = "translateY(0)";
            }
        }
    }
});


var swiper = new Swiper(".hServices", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        450: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});

var swiper = new Swiper(".referans", {
    slidesPerView: 2,
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});
