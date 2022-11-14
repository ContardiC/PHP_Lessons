<?php
$pass="password";
$ofu=md5($pass);
echo "Lunghezza: ".strlen($ofu);
$pass="passwordlunghissiasdasdsadassdasdasdasdasdasdasdasdsaddma$3!_2";
$ofu=md5($pass);
echo "Lunghezza seconda password: ".strlen($ofu);
?>  