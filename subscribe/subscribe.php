<?php
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
  $to = "keahi@primespot.ninja";
  $from = $_POST['email'];
  $subject = "new subscriber";
  $e_mail = $_POST['email'] . "," . "\n";
  $message = "Your new suscriber is " + $e_mail;
	$headers = "From:" . $from;
  $headers2 = "From:" . $to;
  mail($to,$subject,$message,$headers);
  mail($from,$subject2,$message2,$headers2);

  echo "Thank You for your Subscription";
}
?>