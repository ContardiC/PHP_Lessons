<?php
include '../config/db_connect.php';
$title = $_POST["title"];
$sql="SELECT * FROM articles WHERE title LIKE '%$title%'";
$result=$conn->query($sql);
if($result->num_rows>0){
    $i=0;
    $data=array();
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
    echo json_encode($data);
}else{
    echo "non ci sono risultati";
}
$conn->close();
