<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $abstract = $_POST['abstract'];
  $file = $_POST['upload'];

  $email_from = $email;

	$email_subject = "INLP21 Paper Submission";

	$email_body = "Name: $name\n Title: $title\n Abstract: $abstract \n File: $file";
    
    $to = "rvignav@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
?>
