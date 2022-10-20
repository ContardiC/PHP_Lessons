<?php
    $currentYear=date('Y'); // assegno il return di una funzione
    $YOB=1981; // assegno un intero
    $name="Carlo"; // assegno una stringa
    $latitude=45.4654219; // assegno un decimal
    $longitude=9.1859243;
    $currentAge=$currentYear-$YOB;
    $todayDate=new DateTime(); // assegno quindi creo un nuovo oggetto
    echo "Mi chiamo " . $name . " ed ho $currentAge anni <br/>";
    echo "Le coordinate di Milano sono :" . $latitude." - ". $longitude."<br/>";
    echo print_r($todayDate);

?> 
