<?php

$sm = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "info@rrspark.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an e-mail from ".$name .".\n\n" .$message;

    $send = mail($mailTo, $subject, $txt, $headers);

    if($send) {
        header("Location: success.php?mailsent");
    } else {
        echo '<h4>Lo sentimos. No pudimos enviar tu correo.</h4>';
    }
}

?>