<?php
require '../config/db_connect.php';

$title=$_POST['title'];
$body=$_POST['body'];

$query = "INSERT INTO articles (title, body)
VALUES ('$title', '$body')";

if ($conn->query($query) === TRUE) {
  echo "Articolo aggiunto";
} else {
  echo "Errore: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>