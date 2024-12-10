<?php

    if(isset($_POST["email"]) && isset($_POST["nom"]))
    {
        $email = htmlspecialchars(strip_tags($_POST["email"]));
        $nom = htmlspecialchars(strip_tags($_POST["nom"]));
        $somme = htmlspecialchars(strip_tags($_POST["somme"]));


        header("Location: invoice.php?nom=" . urlencode($nom) . "&email=". urlencode($email) . "&somme=". urlencode($somme));
        exit();
        // echo "Informations envoyées...";

    }