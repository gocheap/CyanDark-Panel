<?php
// Email Composer HTML
if ($_POST['send'] == 'yes') {

$to = $_POST['emailto'];
$from = $_POST['from_m'];

$subject = $_POST['subject'];

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = '<html><body>';
$message .= $_POST['msj'];
$message .= '</body></html>';

if (filter_var($to, FILTER_VALIDATE_EMAIL) && filter_var($from, FILTER_VALIDATE_EMAIL)) {
mail($to, $subject, $message, $headers);}

header('Location: '.$_POST['url_ret']);
}
?>