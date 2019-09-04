<?php

if (isset($_Post['submit'])) {
    $name = $_POST['text'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];

    $mailTo = "s696li@uwaterloo.ca";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$msg;

    mail($mailTo, $subject, $txt, $mailFrom);
    header("Location: submit.php?mailsend");
}