<?php
if(isset($_POST['submit'])) {
    $to = "simpsonpro08@gmail.com";
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = "Nom: ".$_POST['nom']."\r\nEmail: ".$_POST['email']."\r\nMessage: ".$_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Le message a été envoyé.";
}
