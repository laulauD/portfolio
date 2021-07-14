<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php

        $retour = mail('laulaudewaele@gmail.com', 'Envoi réussie', $_POST['message'], 'From : portfolio');
        if ($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }

        header("Location: index.html");
        exit();
        
    ?>
</body>
</html>
