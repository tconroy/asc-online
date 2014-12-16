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
    },

    // vidWrapScrollEvent: function() {
    //   if ($('.vid-wrap').visible(true)) {
    //     $('.vid-wrap').css('visibility', 'visible').addClass('animated bounceInUp');
    //     $(window).off('scroll', this.vidWrapScrollEvent);
    //     console.log('vid off');
    //   }
    // },
    // classroomScrollEvent: function() {
    //   if ( $('.leader').visible(true) ) {
    //     $('.classroom > .col-sm-6').each(function(i,el){
    //       var elm = $(el);
    //       setTimeout(function(){
    //         elm.css('visibility', 'visible').addClass('aniamted fadeInUpBig');
    //       }, 100*i);
    //     });
    //     $(window).off('scroll', this.classroomScrollEvent);
    //     console.log('classroom off');
    //   }
    // },
    // learnmoreScrollEvent: function() {
    //   if ( $('.learnmore-footer').visible(true) ) {
    //     $('.learnmore-footer').css('visibility', 'visible');
    //     $('.learnmore-footer > div.col-xs-4:eq(0)').addClass('animated slideInLeft');
    //     $('.learnmore-footer > div.col-xs-4:eq(2)').addClass('animated slideInRight');
    //     $(window).off('scroll', this);
    //     console.log('learnmore off');
    //   }
    // },


    bindAnimOnScroll: function() {

      $(window).scroll(function(event) {
        // animate in the lead video
        if( $('.vid-wrap').visible(true) ) {
          $('.vid-wrap').css('visibility','visible').addClass('animated bounceInUp');
        }
        // animate in the classroom topics
        if( $('.leader').visible(true) ) {
          $('.classroom > .col-sm-6').each(function(i, el) {
            var elm = $(el);
            setTimeout(function(){
              elm.css('visibility', 'visible').addClass('animated fadeInUpBig');
            }, 100*i);
          });
          // animate in the learn more footer
          if( $('.learnmore-footer').visible(true) ) {
            $('.learnmore-footer').css('visibility', 'visible');
            $('.learnmore-footer > div.col-xs-4:eq(0)').addClass('animated slideInLeft');
            $('.learnmore-footer > div.col-xs-4:eq(2)').addClass('animated slideInRight');
          }
        }
      });
      // $(window).on('scroll', this.vidWrapScrollEvent);
      // $(window).on('scroll', this.classroomScrollEvent);
      // $(window).on('scroll', this.learnmoreScrollEvent);
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