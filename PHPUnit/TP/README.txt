Instructions d'utilisation

Contact.php

---->  Le fichier contact.php permet d'envoyer un e-mail en utilisant la fonction mail().

    Conf:
        Installez et configurez Sendmail sur votre serveur ou votre machine virtuelle.
    
    N.B: Les e-mails seront envoyés aux adresses spécifiées dans le formulaire (en utilisant des mails générés par exemple), mais veuillez noter que les e-mails envoyés vers des adresses sécurisées telles que Gmail, Outlook, etc., peuvent ne pas être reçus en raison de la sécurité ou de la configuration de Sendmail.

Contact2.php

---->  Le fichier contact2.php enregistre le mail dans un fichier texte.

Contact3.php

---->  Le fichier contact3.php utilise l'API PHPMailer pour envoyer des e-mails.

    Conf:
        Assurez-vous d'avoir installé PHPMailer sur votre serveur. Si ce n'est pas le cas, téléchargez-le depuis ici et placez les fichiers dans le même répertoire que contact3.php.
        Configurez les paramètres SMTP dans contact3.php (serveur SMTP, adresse e-mail, mot de passe, etc.).