var Nav = {

  init: function () {
    Nav.bindPlugins();
    Nav.bindEvents();
    // set initial view class
    Nav.setNavClass();
  },

  bindPlugins: function() {
    $('.navbar-fixed-top').autoHidingNavbar({
      'showOnBottom': false,
      'animationDuration': '100'
    });
  },

  // sets up event listeners related to navigation
  bindEvents: function () {
    $(window).resize( this.setNavClass );
    $(document).click( this.hideNavMenu );
  },

  // hides the dropdown menu if use clicks outside of
  // it.
  hideNavMenu: function () {
    $('.collapse').collapse('hide');
  },

  /*
   * @returns
   * true  - if page is currently using the breakpoint specified as argument
   * false - if otherwise
   */
  isBreakpoint: function (alias) {
    return $('.device-' + alias).is(':visible');
  },

  /*
   * Lightweight resize event listener
   */
  waitForFinalEvent: (function(){
    var b={};
    return function(c,d,a){
      a||(a="I am a banana!");
      b[a]&&clearTimeout(b[a]);
      b[a]=setTimeout(c,d);
    };
  }()),

  /*
   * Main window resize listener
   * Executes each time window has been resized.
   * calls toggleNavClass() to set appropriate nav class for view.
   */
  setNavClass: function(){
    var fullDateString = new Date();
    Nav.waitForFinalEvent(function(){
      Nav.toggleNavClass();
    }, 10, fullDateString.getTime());
  },

  /**
   * if mobile view, assigns fixed-top to nav.
   * If desktop, static.
   */
  toggleNavClass: function(){
    var $ascobanner = $('header.asco-banner'),
        fixed       = 'navbar-fixed-top',
        stat        = 'navbar-static-top';

    if( Nav.isBreakpoint('xs') ){
      $ascobanner.autoHidingNavbar('setDisableAutohide', false);
      $ascobanner.removeClass('navbar-static-top').addClass('navbar-fixed-top');
    }else{
      $ascobanner.autoHidingNavbar('setDisableAutohide', true);
      $ascobanner.removeClass('navbar-fixed-top').addClass('navbar-static-top');
    }
  }

};