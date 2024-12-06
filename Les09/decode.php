<?php 
$response = file_get_contents("https://randomuser.me/api");
// echo $response;
$data  = json_decode($response, true); // opzione true per assegnarlo ad un array
// var_dump($data);
echo $data["results"][0]["name"]["first"] , "\n";
?>