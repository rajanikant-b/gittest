<?php
//echo phpinfo();
/*echo 'hi';
$date = new DateTime(date('Y-m-d'));
print_r($date);*/
 
 /***********************php functions *********/
//Function hello
/*function Hello(){
 echo 'HEllo WOrld';
 exit;
} 

 //hello();
 
 
 //function countAll
 function countAll($arg1)
{
if (func_num_args() == 0) {
die("You need to specify at least one argument");
} else {
$args = func_get_args(); // Returns an array of arguments
// Remove the defined argument from the beginning
array_shift($args);
//print_r($args);
$count = strlen ($arg1);
echo $count; 
foreach ($args as $arg) {
$count += strlen($arg);
}
}
return $count;
}
//echo countAll("foo", "bar", "baz"); // Displays ’9’

*/
/*****************email*************************/
/*$to = "rajanikant0012@gmail.com";
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

var_dump(mail($to, $subject, $message, $headers));*/
/**************** urlencode **************/
/*session_start();
session_regenerate_id();
//sdh();
var_dump($_SESSION);
$data = "Max & +%2B%252BRuby";
echo "http://www.phparch.com/index.php?name=" . urlencode ($data)."\n";
echo urldecode("Max+%26+%2B%252B%25252BRuby");*/


/**************** php mailer******************/

require_once("phpmailer/class.phpmailer.php");
global $error;

$mail = new PHPMailer();  // create a new object    
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;  // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465; 
$mail->Username = 'rajanikant0012@gmail.com';  
$mail->Password = '';           
$mail->SetFrom('rajanikant0012@gmail.com', 'Raj');
$mail->Subject = 'test';
$mail->Body = 'kuchbhi bhej na yaar';
$mail->AddAddress('pinaki12.testqa01@gmail.com');
if(!$mail->Send()) {
	$error = 'Mail error: '.$mail->ErrorInfo; 
} else {
	$error = 'Message sent!';
}

echo $error;

?>
