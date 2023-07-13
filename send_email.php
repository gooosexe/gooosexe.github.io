<?php
    if ($_POST['message']) {
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        mail("ohuang4131@gmail.com", $subject, $_POST['message'], "From: $email");
    }
?>

