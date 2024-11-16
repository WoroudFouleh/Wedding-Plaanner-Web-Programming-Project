let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');
menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

class Swiper {
    constructor(containerSelector, slideSelector) {
        this.container = document.querySelector(containerSelector);
        this.slides = Array.from(this.container.querySelectorAll(slideSelector));
        this.currentSlideIndex = 0;

        this.initialize();
    }

    initialize() {
        this.showSlide(this.currentSlideIndex);
        this.addEventListeners();
    }

    showSlide(index) {
        if (index < 0 || index >= this.slides.length) {
            return;
        }

        this.slides.forEach((slide) => {
            slide.style.display = 'none';
        });

        this.slides[index].style.display = 'block';
        this.currentSlideIndex = index;
    }

    nextSlide() {
        this.showSlide(this.currentSlideIndex + 1);
    }

    prevSlide() {
        this.showSlide(this.currentSlideIndex - 1);
    }

    addEventListeners() {
        document.addEventListener('keydown', (event) => {
            if (event.key === 'ArrowRight') {
                this.nextSlide();
            } else if (event.key === 'ArrowLeft') {
                this.prevSlide();
            }
        });

        const nextButton = document.querySelector('.swiper-next');
        if (nextButton) {
            nextButton.addEventListener('click', () => {
                this.nextSlide();
            });
        }

        const prevButton = document.querySelector('.swiper-prev');
        if (prevButton) {
            prevButton.addEventListener('click', () => {
                this.prevSlide();
            });
        }
    }
}



const swiper = new Swiper('.home-slider', {
    loop: true,
    spaceBetween: true,
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    }
});
var swiper = new Swiper(".service-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});var swiper = new Swiper(".home-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});

var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween:20,
    grabCursor:true,
    pagination: {
        el: ".swiper-pagination",
        clickable:true,
    },
    breakpoints: {
        450: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        },
    },
});