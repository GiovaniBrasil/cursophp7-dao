<?php

require_once("config.php");

$root = new Usuario();

$root->loadById(4);

echo $root;

?>