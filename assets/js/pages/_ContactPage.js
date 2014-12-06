var Contact = {

  /**
   * Initialization for the Contact Page
   */
  init: function() {
    console.log("Contact::init()");
    $contactForm = $('form#contact-form');
    $appointmentForm = $('form#appointment-form');
    // setup captcha
    this.addFormCaptcha($contactForm);
    this.addFormCaptcha($appointmentForm);
    // setup submit handling
    this.bindAjaxSubmit($contactForm);
    this.bindAjaxSubmit($appointmentForm);
  },

  /**
   * generates a checkbox for captcha validation
   * (bots will not detect inputs created through scripts)
   * @param {Form} $form target form
   */
  addFormCaptcha: function($form) {
    console.log('Contact::addFormCaptcha()');
    $submit = $form.find('input[type="submit"]');
    $submit.after('<label>Please check the box: <input type="checkbox" name="captcha" /></label>');
    $checkbox = $form.find('input[name="captcha"]');
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