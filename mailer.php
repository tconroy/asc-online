<?php
require_once 'lib/swiftmailer/lib/swift_required.php';

// $transport = Swift_SmtpTransport::newInstance('mailtrap.io', 25)
//                 ->setUsername('28078cd801a00bf58')
//                 ->setPassword('de7c3679824b28');
$transport = Swift_MailTransport::newInstance();
$mailer = Swift_Mailer::newInstance($transport);

$ascAddress = [ 'asc@rit.edu' => 'RIT Academic Support Center' ];

/**
 * Only handle POST requests from contact page, and only if CAPTCHA was checked.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    processForm($_POST['formName']);
} else {
    http_response_code(400);
    echo "Bad Request.";
    die();
}

/**
 * [processForm description]
 * @param  [type] $type [description]
 * @return [type]       [description]
 */
function processForm($type) {
    $to; $from; $subject; $body;

    // format the contact message
    if ($type === "contact") {
        // sanitize
        $_POST['email']   = filter_var($_POST['email'],   FILTER_SANITIZE_EMAIL);
        $_POST['name']    = filter_var($_POST['name'],    FILTER_SANITIZE_STRING);
        $_POST['subject'] = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $_POST['message'] = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        // format
        $to      = $GLOBALS['ascAddress'];
        $from    = [ $_POST['email'] => $_POST['name'] ];
        $subject = "ASC Online Contact Form: " . $_POST['subject'];
        $body    =
        "<ul>
            <li> <strong>Name:</strong> {$_POST['name']} </li>
            <li> <strong>Email:</strong> {$_POST['email']} </li>
            <li> <strong>Topic:</strong> {$subject} </li>
        </ul>
        <b>message:</b> <br/>";
        $body .= nl2br($_POST['message']);
    }
    // format the appointment request message
    elseif ($type == 'appointmentRequest') {

        // sanitize
        $_POST['fname']         = filter_var($_POST['fname'],         FILTER_SANITIZE_STRING);
        $_POST['lname']         = filter_var($_POST['lname'],         FILTER_SANITIZE_STRING);
        $_POST['uid']           = filter_var($_POST['uid'],           FILTER_SANITIZE_NUMBER_INT);
        $_POST['appt-email']    = filter_var($_POST['appt-email'],    FILTER_SANITIZE_EMAIL);
        $_POST['yrlvl']         = filter_var($_POST['yrlvl'],         FILTER_SANITIZE_STRING);
        $_POST['college']       = filter_var($_POST['college'],       FILTER_SANITIZE_STRING);
        $_POST['primaryreason'] = filter_var($_POST['primaryreason'], FILTER_SANITIZE_STRING);

        // format
        $to       = $GLOBALS['ascAddress'];
        $fullname = $_POST['fname'].' '.$_POST['lname'];
        $from     = [ $_POST['appt-email'] => $fullname ];

        $subject = "ASC Online - Appointment Request";

        $_POST['primaryreason']  = nl2br($_POST['primaryreason']);
        $_POST['availTuesday']   = implode(', ', $_POST['availTuesday']);
        $_POST['availWednesday'] = implode(', ', $_POST['availWednesday']);
        $_POST['availThursday']  = implode(', ', $_POST['availThursday']);
        $_POST['availFriday']    = implode(', ', $_POST['availFriday']);

        $body =
        "<ul>
            <li><strong>First Name:</strong> {$_POST['fname']} </li>
            <li><strong>Last Name:</strong> {$_POST['lname']} </li>
            <li><strong>Email:</strong> {$_POST['appt-email']} </li>
            <li><strong>University ID:</strong> {$_POST['uid']} </li>
            <li><strong>Year:</strong> {$_POST['yrlvl']} </li>
            <li><strong>College:</strong> {$_POST['college']} </li>
            <li><strong>Reason for making Appointment:</strong><br> {$_POST['primaryreason']} </li>
            <li>
                <strong>Typically Available:</strong>
                <ul>
                    <li>Tuesday: {$_POST['availTuesday']} </li>
                    <li>Wednesday: {$_POST['availWednesday']} </li>
                    <li>Thursday: {$_POST['availThursday']} </li>
                    <li>Friday: {$_POST['availFriday']} </li>
                </ul>
            </li>
        </ul>";
    }
    // send the message
    sendMail( $to, $from, $subject, $body );
}

/**
 * [sendMail description]
 * @param  [type] $to      [description]
 * @param  [type] $from    [description]
 * @param  [type] $subject [description]
 * @param  [type] $body    [description]
 * @return [type]          [description]
 */
function sendMail($to, $from, $subject, $body) {
    $code; $status;
    $email = Swift_Message::newInstance()
            ->setTo($to)
            ->setFrom($from)
            ->setSubject($subject)
            ->setBody($body, 'text/html');
    // error sending
    if( ! $GLOBALS['mailer']->send($email) ) {
        $code = 500;
        $status = "There was an error sending. Please try again later.";
    }
    else {
        $code   = 200;
        $status = "Thank you, your message has been recieved.";
    }
    http_response_code($code);
    echo $status;
    die();
}

function returnError($message) {
    http_response_code(500);
    echo $message;
    die();
}
