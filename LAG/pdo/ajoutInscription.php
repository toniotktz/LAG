<?php include "database.php"; ?>
<?php
/*$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$ville = $_POST['ville'];
$cp = $_POST['cp'];
$telephone = $_POST['telephone'];*/

$req = $conn->prepare('INSERT INTO inscription(nom, prenom, email, ville, cp, telephone)VALUES(:nom, :prenom, :emial, :ville, :cp, :telephone)')or exit(print_r($conn->errorInfo()));;
$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'ville' => $ville,
    'cp' => $cp,
    'telephone' => $telephone
    ));
header('Location: ..\index.php');

?>


