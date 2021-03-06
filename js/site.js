// ScrollMagic Animations 

const controller = new ScrollMagic.Controller({addIndicators: false});

const introLine = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#intro",
    duration: "150%"
    })
    .setTween("#intro-line", 0.5, { y: '40%', ease: Linear.easeNone }, { y: '-40%', ease: Linear.easeNone }) // trigger a TweenMax.to neonate
    // .addIndicators({name: "intro (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);

const announcementLineTop = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#intro",
    duration: "150%"
    })
    .setTween("#announcement-line-top", 0.5, { x: '20%', ease: Linear.easeNone }, { x: '-20%', ease: Linear.easeNone }) // trigger a TweenMax.to neonate
    // .addIndicators({name: "intro (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);   
    
const announcementLineBottom = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#announcement",
    duration: "150%"
    })
    .setTween("#announcement-line-bottom", 0.5, { x: '-20%', ease: Linear.easeNone }, { x: '20%', ease: Linear.easeNone }) // trigger a TweenMax.to neonate
    // .addIndicators({name: "intro (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);       

const aboutLine = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#about",
    duration: "150%",
    offset: -400
    })
    .setTween("#about-line", 0.5, { y: '60%', ease: Linear.easeNone }, { y: '-50%', ease: Linear.easeNone }) // trigger a TweenMax.to neonate
    // .addIndicators({name: "about (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);

const contactLine = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#about",
    duration: "150%"
    })
    .setTween("#contact-line", 0.5, { y: '-40%', ease: Linear.easeNone }, { y: '40%', ease: Linear.easeNone }) // trigger a TweenMax.to neonate
    // .addIndicators({name: "contact (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);

const projectsLine = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#contact",
    duration: "150%",
    offset: -600
    })
    .setTween("#projects-line", 0.5, { x: '-20%', ease: Linear.easeNone }, { x: '20%', ease: Linear.easeNone }) // trigger a TweenMax.to neonate
    // .addIndicators({name: "contact (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);

const navAnimation = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "#end",
    duration: 0
    })
    .setTween("#site-navigation", 0.1, { autoAlpha: 0}) // trigger a TweenMax.to neonate
    // .addIndicators({name: "footer (duration: 0)"}) // add indicators (requires plugin)
    .addTo(controller);    

function handleFirstTab(e) {
    if (e.keyCode === 9) {
        document.body.classList.add('user-is-tabbing');
        
        window.removeEventListener('keydown', handleFirstTab);
        window.addEventListener('mousedown', handleMouseDownOnce);
    }
}
    
function handleMouseDownOnce() {
    document.body.classList.remove('user-is-tabbing');

    window.removeEventListener('mousedown', handleMouseDownOnce);
    window.addEventListener('keydown', handleFirstTab);
}      


(function($){

    $(document).ready(function () {

        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 300
        });

        console.log(scroll);

        const menuToggle = document.getElementById('menu-toggle');
        const nav = document.getElementById('site-navigation');

        const toggleMenuItems = e => {
            e.stopPropagation();
            if (nav.classList.contains('open')){
                nav.classList.remove('open');
            } else {
                nav.classList.add('open');
            }	
        }

        const closeMenu = e => {
            if (nav.classList.contains('open')){
                nav.classList.remove('open');
            }
        }

        menuToggle.addEventListener('click', toggleMenuItems);
        window.addEventListener('click', closeMenu);
    });

    window.addEventListener('click', handleFirstTab);
    

})(jQuery);