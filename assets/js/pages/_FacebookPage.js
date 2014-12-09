var Facebook = {

  init: function() {
      console.log("Facebook::init()");
      if ( this.setupFBStream() ) {
        this.fetchCoverPhoto();
      }

      $(window).on('DOMContentLoaded load resize scroll', this.checkIfVisible);
  },

  checkIfVisible: function() {
    if ($('a.ibacor_moregf').visible()) {
      console.log('visible!');
      $('a.ibacor_moregf').click();
    }
  },

  fetchCoverPhoto: function(callback) {
    $.getJSON('http://graph.facebook.com/RITAcademicSupportCenter?fields=cover&callback=?', function(data) {
      if (data.cover.source) {
        var style = {
          'background': 'url('+data.cover.source+') 0 0 center center no-repeat',
          'background-size': 'cover'
        };
        $('div#ibacor_fb_content div.ibacor_fb_profile').css(style);
        $('img.profilepic').attr('src', '/wp-content/themes/asco-theme/assets/img/layout/logo/asc-online.png').css('width', '160px');
        return;
      }
      else if (data.error) { alert(data.error.message);}
      else { alert('no cover photo found'); }
    });
  },

  setupFBStream: function() {
    console.log('Facebook::setupFBStream()');
    // Configuration your facebook_id & facebook_access_token
    ibacor_fb_streaming(ibacor_fb_id = 1423260191254768, ibacor_fb_token = 'ibacor.com_apps');
    return true;
  },

}; // end Facebook