<?php
require '../config/db_connect.php';

$query = "SELECT title,body FROM articles";
$result = $conn->query($query);
echo "<table border='solid'>";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo "<td>".$row["title"]. "</td>";
        echo "<td>". $row["body"]. "</td>";
    echo "</tr>";  
  }
  echo "</table>";
} else {
  echo "Non sono presenti articoli";
}
$conn->close();
?>