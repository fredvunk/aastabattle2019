<?php


if (isset($_POST['submit'])) {
    
    $subject = $_POST['teema'];
    $email = $_POST['email'];
    $msg = $_POST['sisu'];
    
    $mailTo = $email;
    $headers = "From: ".$email;
    
    $message = "Tegemist on automaatse kirjaga veebilehelt http://veebimeister4.ikt.khk.ee, mis edastab kontaktvormi poolt saadetud sõnumi.\n\n Teile saadeti kontaktvormi kaudu sõnum järgnevalt e-maililt: ".$email.".\n\n"."Sisu: \n\n".$msg;
    
    
    
    mail($mailTo, $subject, $message, $headers);
    
    
    header("Location: kontakt.php?mailsent");
    
    exit();
    
}

?>