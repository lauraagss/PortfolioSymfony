Array.prototype.forEach.call(document.querySelectorAll('.pd-parallax'), function(elem){
    elem.style.backgroundImage ='url('+elem.getAttribute('datasrc')+')';
})
var swiper = new Swiper('.swiper-container',
    {effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect:
            {rotate: 30,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            },
        navigation:
            {nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        loop:true,
        autoplay: {delay: 5000,
            disableOnInteraction: false,
        }
    });