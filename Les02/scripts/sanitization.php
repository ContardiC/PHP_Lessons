<?php

    function sanitizeString($data)
    {
        $data = trim($data);            //rimuove gli spazi prima e dopo la stringa 
        $data = stripslashes($data);    // rimuove gli slashes //
        $data=(filter_var($data, FILTER_SANITIZE_STRING));
        return $data;
    }
 
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_filtered=sanitizeString($password);
    $email_filterd = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email_filtered;
?>