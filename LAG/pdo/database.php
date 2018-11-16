<?php
class database{
    private $_host = 'mysql:host=localhost;dbname=lag;charset=utf8';
    private $_user = 'root';
    private $_password = '';
    private $_bdd;

    public function getHost(){
        return $this->_host;
    }
    public function setHost($host){
        $this->_host =$host;
    }
    function connexion(){
        try{
            $this->setBdd(new PDO($this->getHost(),$this->getUser(),$this->getPassword()));
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
    function addMember(){
        return 'INSERT INTO inscription(nom, prenom, email, ville, cp, telephone) VALUES(:nom, :prenom, :email, :ville, :cp, :telephone)';
    }
}

?>