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
    bindCaptchaCheckbox: function($checkbox, $submit) {
        $checkbox.click(function() {
            if (!$(this).is(':checked')) {
                $submit.attr('disabled', 'disabled');
            } else {
                $submit.removeAttr('disabled');
            }
        });
    },
    /**
     * binds submit button to ajax submission
     * @param  {[type]} $form [description]
     * @return {[type]}       [description]
     */
    bindAjaxSubmit: function($form) {
        var that = this;
        $form.submit(function(e) {
            e.preventDefault();
            var formData = $form.serialize();
            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: formData
            }).done(function(res) {
                that.onFormAjaxSuccess($form, res);
            }).fail(function(data) {
                that.onFormAjaxFail( $form, data );
            });
        });
    },
    /**
     * [onFormAjaxSuccess description]
     * @param  {[type]} $form    [description]
     * @param  {[type]} response [description]
     * @return {[type]}          [description]
     */
    onFormAjaxSuccess: function($form, response) {
        var alert = $('#successAlert').clone().removeClass('hidden');
        alert.find('.msgbody').text(response);
        // alert.prependTo($form.parent());
        alert.prependTo( $form );
        $form[0].reset();
        $form.find('input[type="submit"]').attr('disabled', 'disabled');
    },
    /**
     * [onFormAjaxFail description]
     * @param  {[type]} $form [description]
     * @param  {[type]} data  [description]
     * @return {[type]}       [description]
     */
    onFormAjaxFail: function($form, data) {
        var alert = $('#errorAlert').clone().removeClass('hidden');
        alert.find('.msgbody').text(data.responseText);
        alert.prependTo($form.parent());
        $form.find('input[name="captcha"]').prop('checked', false);
        $form.find('input[type="submit"]').attr('disabled', 'disabled');
    },
}; // end Contact page