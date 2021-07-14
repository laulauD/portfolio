<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";

$mail = new PHPMailer;


$mail->From = 'contact@portfolio.com';
$mail->FromName = 'Contact';
$mail->addAddress('laulaudewaele@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Nouveau message !';

if(isset($_POST['submit']) && isset($_POST["message"]) && isset($_POST["usermail"]) && isset($_POST["username"])) {
    $mail->Body = "Mail : ".htmlspecialchars($_POST["usermail"])." --- Nom : ".htmlspecialchars($_POST["username"])." --- message : ".htmlspecialchars($_POST["message"]) ;
    if (!$mail->send()) {
        echo 'Le message n\'a pas été envoyé';
        echo 'Erreur : ' . $mail->ErrorInfo;
    } else {
        echo 'Youpi !! Message envoyé !';
    }
}
header("Location: index.html");
exit();
?>
