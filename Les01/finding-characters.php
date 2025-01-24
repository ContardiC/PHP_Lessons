<?php
$text = 'Home sweet home';
?>
<b>First match (case-sensitive):</b>
<?= strpos($text,'ho') ?><br>
<b>First match (not case-sensitive):</b>
<?= stripos($text,'me', 5) ?><br>
<b>Last match (case-sensitive):</b>
<?= strrpos($text,'Ho') ?><br>
<b>Last match (not case-sensitive):</b>
<?= strripos($text,'Ho') ?><br>
<b>Text after first match (case-sensitive)</b>
<?= strstr($text,'ho') ?><br>
<b>Text after first match (not case-sensitive)</b>
<?= stristr($text,'ho') ?><br>
<b>Text between two positions</b>
<?= substr($text, 5, 7) ?><br>
<?= 'hello'?><br>
<?php $username='Buck' ?>
<h2>Ciao <?= $username ?></h2>
