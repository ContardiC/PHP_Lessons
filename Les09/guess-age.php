<?php
if( ! empty($_GET["name"])){
    $response = file_get_contents("https://api.agify.io?name={$_GET['name']}");
    $data  = json_decode($response, true); // opzione true per assegnarlo ad un array
    $age = $data["age"];
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the age</title>
</head>
<body>
    <?php if(isset($age)) : ?>
        Age: <?= $age ?>
    <?php endif; ?>
    <form>
        <label for="name">Name</label>
        <input name="name" id="name">
        <button>Guess age</button>
    </form>
</body>
</html>