<?php
if (isset($_POST['submit'])) {

    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
    }
    else {
        $prenom = "Mr ou Mme";
    }

    if (isset($_POST['nom'])) {
        $nom = $_POST['nom'];
    } else {
        echo "Aïe, le nom est obligatoire pour savoir qui veut me contacter";
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        echo "Aïe, email obligatoire pour pouvoir vous répondre";
    }

    if (isset($_POST['sujet'])) {
        $sujet = $_POST['sujet'];
    } else {
        echo "Aïe, le sujet est obligatoire afin de faciliter la compréhension du mail";
    }

    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    } else {
        echo "Aïe, écrire un message est obligatoire";
    }

    $email_subject = "Message depuis votre portfolio";

    $to = "valentin.mrt45@gmail.com";

    $headers = "De: " . $prenom . " " . $nom;

    $email_body =  $headers . "\n\n" . "Objet : " . $sujet . "\n\n" . $message . "\n\n\n Adresse mail de l'envoyeur : " . $email . ".";
    

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<body style='background-color: #24252A;'> <div style='text-align:center; font-size:25px; color:white;'> Votre message a parfaitement été envoyé, vous allez être redirigé dans moins de 5 secondes </div> </body>";
        header("Refresh:6; url=index.html");
    } else {
        echo "<body style='background-color: #24252A;'> <div style='text-align:center; font-size:25px; color:white;'> Problème lors de l'envoie du message, veuillez réessayer, redirection dans moins de 5 secondes </div> </body>";
        header("Refresh:6; url=index.html");
    }
}
