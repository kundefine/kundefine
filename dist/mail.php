<?php 
    $mail = mail($_POST['mailTo'], $_POST['mailerName'], $_POST['mailerMessage']);

    echo $mail;
?>