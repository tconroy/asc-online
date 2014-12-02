<?php

/**
 * Only handle POST requests from contact page, and only if CAPTCHA was checked.
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['captcha'] == 'on') {
  if ( $_POST['formName'] == 'contactForm' )     { processForm('contact'); }
  if ( $_POST['formName'] == 'appointmentForm' ) { processForm('appointment'); }
} else {
  // not post. ignore
  http_response_code(403);
  echo "There was a problem with your submission. Please try again.";
}

/**
 * [processForm description]
 * @param  [type] $type [description]
 * @return [type]       [description]
 */
function processForm( $type ) {

  if ($type == 'contact') {
    http_response_code(200);
    echo "contact form";
  }
  if ( $type == 'appointment' ) {

  }

  // send the email


  // return confirmation / failure

  // die
}

?>