<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<body>

    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if (isset($_POST["button"])) {
        $nom = $_POST['nom'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];

        // Vérif des champs
        if (empty(trim($nom)) || empty(trim($sujet)) || empty(trim($message))) {
            echo "<span class='error'>Erreur : Pas de champs vides autorisés.</span>\n";
        } elseif (!preg_match('/^[a-zA-Z][a-zA-Z\s]*$/', $nom)) {
            echo "<span class='error'>Erreur : Le nom ne doit contenir que des lettres et des espaces et peut commencer par une lettre.</span>\n";
        } else {

            // Instance de PHPMailer
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Remplacer par votre serveur SMTP
                $mail->SMTPAuth = true;
                $mail->Username = 'exemple@gmail.com'; // Remplacer par votre adresse e-mail
                $mail->Password = 'mdp'; // Remplacer par votre mot de passe
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Destinataire
                $mail->setFrom('exemple@gmail.com'); // Utiliser l'adresse connecté avec le SMTP
                $mail->addAddress('j.dubois@ecole-ipssi.net'); // Mail du destinataire
    
                // Contenu du message
                $mail->isHTML(false);
                $mail->Subject = $sujet;
                $mail->Body = "Message de: $nom\n\n$message";

                // Envoi du mail
                $mail->send();
                echo "<span class='success'>Votre message a été envoyé avec succès :)</span>";
            } catch (Exception $e) {
                echo "<span class='error'>Erreur lors de l'envoi :( ----> {$mail->ErrorInfo} </span>";
            }
        }
    }
    ?>
    <div class="container">
        <div class="contact-box">
            <form action="" method="post">
                <h2>Contact</h2>
                <input type="text" name="nom" class="field" placeholder="Votre Nom" required><br>
                <input type="text" name="sujet" class="field" placeholder="Sujet" required><br>
                <textarea name="message" class="field" placeholder="Message" required></textarea><br><br>
                <input type="submit" name="button" class="btn" value="Envoyer">
            </form>
        </div>
    </div>
</body>
</html>