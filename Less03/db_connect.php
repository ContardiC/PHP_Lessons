<?php
$hostname="localhost";
$username="root";
$password="root";
$database="news";
$port="8889";
// creo la connessione
$conn=new mysqli($hostname,$username,$password,$database,$port);


// controllo la connessione
if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
} 
echo "Connessione ok";
?>