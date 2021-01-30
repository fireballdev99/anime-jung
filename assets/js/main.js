$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        responsive: {
            0: {
                items: 1,

            },
            600: {
                items: 2,

            },
            1000: {
                items: 3,

            }
        }

    });
});

$('.to-top').click(function () {
    $('html, body').animate({ scrollTop: '0px' }, 800);
})

$(function () {
    // global variables
    captchaResized = false;
    captchaWidth = 304;
    captchaHeight = 78;
    captchaWrapper = $('#recaptcha-wrapper');
    captchaElements = $('#rc-imageselect, .g-recaptcha');

    $(window).on('resize', function () {
        resizeCaptcha();
    });

    resizeCaptcha();
});


// Recaptcha
function resizeCaptcha() {
    if (captchaWrapper.width() >= captchaWidth) {
        if (captchaResized) {
            captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
            captchaWrapper.height(captchaHeight);
            captchaResized = false;
        }
    } else {
        var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05 / 15));
        captchaElements.css('transform', 'scale(' + scale + ')').css('-webkit-transform', 'scale(' + scale + ')').css('-ms-transform', 'scale(' + scale + ')').css('-o-transform', 'scale(' + scale + ')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
        captchaWrapper.height(captchaHeight * scale);
        if (captchaResized == false) captchaResized = true;
    }
}
// resizeCaptcha();