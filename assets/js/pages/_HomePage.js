var Home = {

  init: function() {
    console.log("Home::init()");
      this.bindEvents();
    },

    /**
     * attach DOM elements to events
     * @return {[type]} [description]
     */
    bindEvents: function() {
      this.bindYTLazyLoad();
      this.bindSocialIconAnim();
    },

    bindYTLazyLoad: function() {
      $('.js-lazyYT').lazyYT();
    },

    bindSocialIconAnim: function() {
      // bounce social icons at top of page on hover.
      $('.social-circle li, .social li').mouseenter(function(){
        $(this).addClass('animated tada');
        $(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass('animated tada');
        });
      });
    }

}; // end home