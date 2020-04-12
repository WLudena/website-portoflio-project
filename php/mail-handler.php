<?php

if(isset($_POST['submit'])){
    $requester_name = $_POST['firstName'] .", " . $_POST['surname'];
    $requester_email = $_POST['contactEmail'];

    $to = "portfolio.request@outlook.com";
    
    $request_subject = "Portfolio Contact Request - " . date("d/m/Y");


    $email_body =   "From: $requester_name \n" . 
                    "Contact email: $requester_email\n" .
                    "Message: " . $_POST['message'];

    mail($to, $request_subject, $email_body);

    header("Location: ../index.html");
}

?>