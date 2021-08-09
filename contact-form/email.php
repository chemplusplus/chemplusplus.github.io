<?php $name = $_POST['name'];
$email = $_POST['email']; //sets the email to the input given from the form
$message = $_POST['message']; //sets the message to the message given in the form
$formcontent="From: $name \n Message: $message"; //sets the email message to the name and the message
$recipient = "example@email.com"; //sends the message to a recipient, in this case myself
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Message Could Not Send!");
echo "Message Has Been Sent!"; //Send Message, if succesful
//Thank you to Piotr Malek from Codetrap for the outline of this PHP code, I will continue to work with it.
?>
