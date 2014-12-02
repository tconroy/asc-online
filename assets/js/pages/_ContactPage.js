var Contact = {

  /**
   * Initialization for the Contact Page
   */
  init: function() {
    console.log("Contact::init()");
    $contactForm = $('form.contact-form');

    this.addInputStyling($contactForm);
    this.addFormCaptcha($contactForm);
    this.bindAjaxSubmit($contactForm);
  },

  addInputStyling: function ($form) {
    $form.find('input[type="text"], textarea, checkbox').uniform();
  },

  /**
   * generates a checkbox for captcha validation
   * (bots will not detect inputs created through scripts)
   * @param {Form} $form target form
   */
  addFormCaptcha: function($form) {
    console.log('Contact::addFormCaptcha()');
    $form.find('#submitContact')
          .before('<label>Please check the box: <input type="checkbox" name="captcha" /></label>');

    $checkbox = $form.find('input[name="captcha"]');
    $submit = $form.find('input[type="submit"]');

    this.bindCaptchaCheckbox($checkbox, $submit);
  },

  /**
   * toggles disabled state of submit button based on captcha checkbox state.
   * @return {[type]} [description]
   */
  bindCaptchaCheckbox: function ($checkbox, $submit) {
    $checkbox.click(function() {
      if ( ! $(this).is(':checked') ) {
        $submit.attr('disabled', 'disabled');
        console.log('disabled');
      } else {
        $submit.removeAttr('disabled');
        console.log('enabled');
      }
    });
  },

  /**
   * binds submit button to ajax submission
   * @param  {[type]} $form [description]
   * @return {[type]}       [description]
   */
  bindAjaxSubmit: function ($form) {
    console.clear();
    $form.submit(function(e){
      e.preventDefault();
      var formData = $form.serialize();
      $.ajax({ type: 'POST', url: $form.attr('action'), data: formData})
      .done(function(res)
      {
        console.dir(res);
        alert('success!'); // update status text
        $form[0].reset(); // reset the form
        $form.find('input[type="submit"]').attr('disabled','disabled');
      })
      .fail(function(data)
      {
        alert('error');
      });
    });
  }

}; // end Contact page