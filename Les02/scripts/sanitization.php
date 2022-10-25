<?php
    $email=$_POST['email'];
    $password=$_POST['password'];
    $emailSanitizzata = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $emailSanitizzata;

?>