jQuery(document).ready(function(){
  jQuery("#sidebar").sticky({topSpacing:50});

  var controller = new ScrollMagic.Controller();

  console.log("ScrollMagic:", ScrollMagic);

  var aboutMeBgChange = new ScrollMagic.Scene({
                  triggerElement: "#trigger",
                  duration: 300
              }).setTween("#hero-text", 0.5, {top: '+=100', opacity: 0}).addTo(controller);  
});