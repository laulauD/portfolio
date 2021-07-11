<?php
      if(isset($_POST['submit']) && isset($_POST["message"]) && isset($_POST["usermail"]) && isset($_POST["username"])) {
          $message = "Mail : ".$_POST["usermail"]."\n Nom : ".$_POST["username"]."\n message : ".$_POST["message"] ;
          mail("laulaudewaele@gmail.com", "Merci de m'avoir contacté !",
              $message. "From: laulaudewaele@gmail.com");
      }
  
header('Location: index.html');
exit();
      ?>

