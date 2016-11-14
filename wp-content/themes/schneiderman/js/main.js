jQuery(document).ready(function(){
  jQuery("#sidebar").sticky({topSpacing:50});

  let controller = new ScrollMagic.Controller();

  console.log("ScrollMagic:", ScrollMagic);

  let aboutMeBgChange = new ScrollMagic.Scene({
                  triggerElement: "#trigger",
                  duration: 300
              }).setTween("#article-header", 0.5, {top: '+=100', opacity: 0}).addTo(controller);  
});