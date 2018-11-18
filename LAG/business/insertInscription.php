<?php
require_once __DIR__."/../pdo/dao/daoInscription.php";

$inscription = $_POST;
$res = insertInscription($inscription);

if (res == true){
    header('Location: /LAG/LAG/index.php');
}
?>