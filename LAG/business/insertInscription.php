<?php
require_once __DIR__."/../pdo/dao/daoInscription.php"; //__DIR__ permet de r�cuperer le path

$inscription = $_POST;
$res = insertInscription($inscription);

if (res == true){
    header('Location: /LAG/LAG/index.php');
}
?>