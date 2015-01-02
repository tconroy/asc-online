<?php
require_once 'lib/swiftmailer/lib/swift_required.php';
// $transport = Swift_SmtpTransport::newInstance('smpt://localhost', 1025);
$transport = Swift_SmtpTransport::newInstance('smtp://0.0.0.0', 1025, 'ssl');
$mailer = Swift_Mailer::newInstance($transport);


/**
 * Only handle POST requests from contact page, and only if CAPTCHA was checked.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    processForm($_POST['formName']);
} else {
    http_response_code(400);
    echo "Bad Request.";
}

/**
 * [processForm description]
 * @param  [type] $type [description]
 * @return [type]       [description]
 */
function processForm($type) {

    if ($type === "contact") {
      // Create the message
      $message = Swift_Message::newInstance()
        ->setSubject('Your subject')
        ->setFrom(array('john@doe.com' => 'John Doe'))
        ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))
        ->setBody('Here is the message itself');
        // $mailer->send($message);
        $GLOBALS['mailer']->send($message);

        // $message = Swift_Message::newInstance('Wonderful Subject')->setFrom(array('john@doe.com' => 'John Doe'))->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))->setBody('Here is the message itself');
        // $mailer->send($message);
        // http_response_code(200);
        // echo "contact form";
        // die();
    }
    if ($type == 'appointmentRequest') {
        http_response_code(200);
        echo "appointment form";
    }

    // send the email

    // return confirmation / failure

    // die


}

function sendMail($from, $to, $subject, $body) {

    if (IPAddress::In(["127.0.0.1", "::1"])) {
        $to = ['tdcarts@rit.edu' => 'Tom Conroy'];
        // for dev purposes
    }
    $message = Swift_Message::newInstance()->setSubject($subject)->setFrom($from)->setTo($to)->setBody($body, 'text/html');
}
