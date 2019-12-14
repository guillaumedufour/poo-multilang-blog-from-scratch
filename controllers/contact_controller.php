<?php

if (!empty($_POST) && isset($_POST['btnContact'])) {
    if (!empty($_POST['email']) && !empty($_POST['firstname']) && !empty($_POST['message'])) {
        $email = str_secur($_POST['email']);
        $firstname = str_secur($_POST['firstname']);
        $message = str_secur($_POST['message']);

        $message .= ' - email envoyé par '.$firstname.' : '.$email;

        mail('', 'contact via le formulaire du site', $message);

    } else {
        $error = "Vous devez remplir tous les champs";
    }
}
