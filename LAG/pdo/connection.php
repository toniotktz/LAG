<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=lag';'charset=utf8', 'Tonio', 'root',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
    
?