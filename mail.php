
<?php
ini_set("SMTP", "autodiscover.dewaelelaurine.fr");
$to      = 'laulaudewaele@gmail.com';
$subject = 'Nouveau contact';
$message = '';
$headers = 'From: contact@portfolio.com';

if(isset($_POST['submit']) && isset($_POST["message"]) && isset($_POST["usermail"]) && isset($_POST["username"])) {
    $message = "Mail : ".htmlspecialchars($_POST["usermail"])." --- Nom : ".htmlspecialchars($_POST["username"])." --- message : ".htmlspecialchars($_POST["message"]) ;
    $result = mail($to, $subject, $message, $headers);
    if( $result ) {
        $_POST['erreur'] = false;
    }else{
        $_POST['erreur'] = true;
    }
}
header("Location: index.html");
exit();

?>

