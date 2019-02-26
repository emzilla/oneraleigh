// ScrollMagic Animations 

const controller = new ScrollMagic.Controller({addIndicators: false});

const introLine = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#intro",
    duration: "150%"
    })
    .setTween("#intro-line", 0.5, { y: '33%', ease: Linear.easeNone }, { y: '-33%', ease: Linear.easeNone }) // trigger a TweenMax.to neonate
    // .addIndicators({name: "intro (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);

const aboutLine = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#about",
    duration: "150%",
    offset: -400
    })
    .setTween("#about-line", 0.5, { y: '-33%', ease: Linear.easeNone }, { y: '33%', ease: Linear.easeNone }) // trigger a TweenMax.to neonate
    // .addIndicators({name: "about (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);

const contactLine = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#contact",
    duration: "150%",
    offset: -600
    })
    .setTween("#contact-line", 0.5, { y: '33%', ease: Linear.easeNone }, { y: '-33%', ease: Linear.easeNone }) // trigger a TweenMax.to neonate
    // .addIndicators({name: "contact (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);

const footerLine = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#end",
    duration: "150%",
    offset: -900
    })
    .setTween("#footer-line", 0.5, { y: '-33%', ease: Linear.easeNone }, { y: '33%', ease: Linear.easeNone }) // trigger a TweenMax.to neonate
    // .addIndicators({name: "footer (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);


(function($){
    $(document).ready(function () {
        var scroll = new SmoothScroll('a[href*="#"]');
    });
})(jQuery);