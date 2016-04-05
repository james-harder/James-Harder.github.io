<?php $errors ="";
$myEmail = 'james.harder@gmail.com';

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))
{
  #errors .= "\n Error: all fields required";
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$number = $_POST['phone'];

if (!preg_match("/^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9]+(\.[a-z0-9]+)*(\.[a-z]{2,3})$/i", $email_address))
{
  $errors .= "\n Error: invalid email address";
}

if(empty($errors))
{
  $to = $myEmail;
  $email_subject = "contact form submision: $name";
  $email_body = "you have received a message. ".
  "here are the details:\n Name: $name \n".
  "Email: $email_address\n Message: \n $message";
  $headers = "From: $myEmail\n";
  $headers .= "Reply-to: $email_address";
  mail($to,$email_subject,$email_body,$headers);
  header('Location: ../thanks.html');
}
?>
