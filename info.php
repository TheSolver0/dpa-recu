<?php

    if(isset($_POST["email"]) && isset($_POST["nom"]))
    {
        $email = htmlspecialchars(strip_tags($_POST["email"]));
        $nom = htmlspecialchars(strip_tags($_POST["nom"]));

        echo "Informations envoyées...";

        header("Location: invoice.php?nom=" . urlencode($nom) . "&email=". urlencode($email));

    }