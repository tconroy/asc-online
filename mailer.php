<?php
/**
 * Only handle POST requests from contact page, and only if CAPTCHA was checked.
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['captcha'] == 'on') {
  switch ( $_POST['formName'] ) {
    case 'contact':             processForm('contact');             break;
    case 'appointmentRequest':  processForm('appointmentRequest');  break;
  }
}
else {
  // not post. ignore
  http_response_code(403);
  echo "There was a problem with your submission. Please try again.";
}

/**
 * [processForm description]
 * @param  [type] $type [description]
 * @return [type]       [description]
 */
function processForm( string $type ) {

  if ($type == 'contact') {
    sendMail(['asconline@rit.edu'=>'ASC Online Contact Form'], [$_POST['email']=>$_POST['name']], $_POST['subject'], $_POST['message'] );
    http_response_code(200);
    echo "contact form";
  }
  if ( $type == 'appointmentRequest' ) {
    http_response_code(200);
    echo "appointment form";
  }

  // send the email


  // return confirmation / failure

  // die
}

function sendMail(array $from, array $to, string $subject, string $body) {
  require_once 'lib/swiftmailer/lib/swift_required.php';

  if (IPAddress::In(["127.0.0.1", "::1"]) ) {
    $to = ['tdcarts@rit.edu' => 'Tom Conroy']; // for dev purposes
  }

  $message = Swift_Message::newInstance()
  ->setSubject($subject)
  ->setFrom($from)
  ->setTo($to)
  ->setBody($body, 'text/html');
}

?>