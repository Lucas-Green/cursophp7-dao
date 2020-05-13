<?php 

require_once("config.php");

$alexandre = new Usuario();

$alexandre->loadbyId(2);

echo $alexandre;

?>