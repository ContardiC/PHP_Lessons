<?php
include '../config/db_connect.php';

$sql="SELECT * FROM articles";
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
