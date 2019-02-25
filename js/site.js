// ScrollMagic Animations 

const controller = new ScrollMagic.Controller({addIndicators: true});

var scene = new ScrollMagic.Scene({
    triggerElement: "#about"
})
.setTween("#test-scroll-object", 0.5, {backgroundColor: "green", scale: 2.5}) // trigger a TweenMax.to neonate
.addIndicators({name: "1 (duration: 0)"}) // add indicators (requires plugin)
.addTo(controller);

console.log('hello!');