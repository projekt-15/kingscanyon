/**
 * File scripts.js.
 *
 * custom js goes here
 */
( function($) {
    //Init ScrollMagic
    var controller = new ScrollMagic.Controller();

    var tIntro = new TimelineMax();
    tIntro.staggerFrom('.test',.25,{opacity:0,delay:.5}, 0.25).from('#intro-subhead',.25,{opacity:0,delay:.25});

    var tOver = new TimelineMax();
    tOver.from('#over-text',.25,{opacity:0}).from('#over-text-2',.25,{scale:0}).from('#over-text-3',.25,{opacity:0,delay:.25}).from('#over-text-4',.25,{opacity:0}).from('.overpopulation-big-text-line',.25,{width:0});

    var tOverBg = new TimelineMax();
    tOverBg.from('#home-overview-bg1',.5,{opacity:0}).from('#home-overview-bg2',.25,{y:'500px',delay:.5,ease:Bounce.easeOut}).from('#home-overview-bg3',.25,{y:'500px',ease:Bounce.easeOut});

    var tFireBg = new TimelineMax();
    tFireBg.from('#home-wildfire',.15,{backgroundColor:'#03644E',delay:.75})
    .to('#home-wildfire-bg1',.15,{opacity:0})
    .from('#home-wildfire-bg3',.15,{opacity:0})
    .from('#home-wildfire-bg4',.15,{opacity:0})
    .from('#home-wildfire-bg5',.15,{opacity:0}) //fire
    .from('#home-wildfire-bg6',.15,{opacity:0});

    var scene = new ScrollMagic.Scene({
        triggerElement: '.overpopulation-intro'
    })
    .setTween(tOver)
    .addTo(controller);

    var scene2 = new ScrollMagic.Scene({
        triggerElement: '.overpopulation-intro'
    })
    .setTween(tOverBg)
    .addTo(controller);

    var scene3 = new ScrollMagic.Scene({
        triggerElement: '#home-wildfire'
    })
    .setTween(tFireBg)
    .addTo(controller);

    var domWidth = $(document).width();
    var percentView;



    /* EXAMPLE
    //build a screen
    var ourScene = new ScrollMagic.Scene({
        triggerElement: '#home-overview'
    })
    .setClassToggle('#home-overview','fade-in')
    .addTo(controller);
    */




} )(jQuery);
