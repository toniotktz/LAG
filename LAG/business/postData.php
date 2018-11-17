<?php

require_once("../../pdo/dao/dao.php");
session_start(); //ccommence la session

$data = $_POST["data"];
var_dump($data);



insertTexte($data);

session_end();


?>