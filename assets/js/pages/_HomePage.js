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
      this.bindAnimOnScroll();
      this.bindYTLazyLoad();
      this.bindSocialIconAnim();
      this.bindJumbotronCarousel();
    },

    bindJumbotronCarousel: function() {
      $('.inner-carousel').slick({
        accessibility: false,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        draggable: false,
        slide: '.slide'
      });
    },

    bindAnimOnScroll: function() {
      // bind video bounce in
      $(window).on('scroll.vidAnim', function(){
        if ($('.vid-wrap').visible(true)) {
          $('.vid-wrap').css('visibility', 'visible').addClass('animated bounceInUp');
          $(window).off('scroll.vidAnim');
          console.log('vid off');
        }
      });
      // bind classroom topics fade in
      $(window).on('scroll.classroomAnim', function(){
        if ($('.leader').visible(true)) {
          $('.classroom > .col-sm-6').each(function(i,el){
            var elm = $(el);
            setTimeout(function(){
              elm.css('visibility','visible').addClass('animated flipInX');
            }, 200*i);
          });
          $(window).off('scroll.classroomAnim');
          console.log('classroom off');
        }
      });
      // bind learn more icons slide in
      $(window).on('scroll.learnmoreAnim', function(){
        if ( $('.learnmore-footer').visible(true) ) {
          $('.learnmore-footer').css('visibility', 'visible');
          $('.learnmore-footer > div.col-xs-4:eq(0)').addClass('animated slideInLeft');
          $('.learnmore-footer > div.col-xs-4:eq(2)').addClass('animated slideInRight');
          $(window).off('scroll.learnmoreAnim');
          console.log('learnmore off');
        }
      });
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
      $('.navbar-brand').mouseenter(function(){
        $(this).addClass('animated rubberBand');
        $(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass('animated rubberBand');
        });
      });
    }

}; // end home