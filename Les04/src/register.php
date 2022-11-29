<?php
require '../config/db_connect.php';
require '../functions/utility.php';
$email=$_POST['email'];
$password=$_POST['password'];
$email=filter_var($email, FILTER_SANITIZE_EMAIL);
$password=sanitizeString($password);
$sql="SELECT * FROM users WHERE email='$email'";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "L'utente con questa email: ".$email." è già registrato";
}else{
    $password=md5($password);
    $sql="INSERT INTO users(email,password) VALUES('$email','$password')";
    if($conn->query($sql)===TRUE){
        echo "Registrazione effettuta";
    }else{
        echo $conn->error;
    }
    
}
$conn->close();
?>