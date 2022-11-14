<?php
require '../config/db_connect.php';
require '../functions/utility.php';
$email=$_POST['email'];
$password=$_POST['password'];
$email=filter_var($email, FILTER_SANITIZE_EMAIL);
$password=sanitizeString($password);
$sql="SELECT * FROM users WHERE email='$email';
$result=$conn->query($sql);
if($result->num_rows == 0){
    echo "L email utilizzata non è registrata ";
}else{
    $password=md5($password);
    $sql="SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        echo "Benvenuto";
        // creazione della sessione
        // redirect sulla home page per utenti che hanno fatto il login
    }else{
        echo "Spiacente le credenziali sono errate ";
    }
    
}
$conn->close();
?>