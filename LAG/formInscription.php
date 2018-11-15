<!DOCTYPE html>
<html lang="fr">
<?php require "header.php";?>
<body>
    <div class="container" style="margin-top:30px">
        <h1>Formulaire d'inscription</h1>
        <form method="post">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="Nom">Nom:</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrer votre nom" name="nom" />

                    <label for="Prenom">Prenom:</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Entrer votre Prenom" name="prenom" />

                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Entrer votre Email" name="email" />
                </div>
                <div class="form-group col-sm-6">
                    <label for="ville">Ville:</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Entrer la ville ou vous habitez" name="ville" />

                    <label for="codePostal">Code postal:</label>
                    <input type="text" class="form-control" id="cp" placeholder="Entrer votre code postal" name="cp" />

                    <label for="tel">Telephone:</label>
                    <input type="tel" class="form-control" id="tel" placeholder="Entrer votre numero de telephone" name="tel" />
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="confirmer" value="Confirmer" />
        </form>
    </div>
</body>
<?php require "footer.php";?>
</html>
<?php
if(isset($_POST['confirmer'])){
    if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['ville']) || empty($_POST['cp']) || empty($_POST['tel'])){
        echo "Veuillez remplir tout les champs";
    }
    else{
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $ville=$_POST['ville'];
        $cp=$_POST['cp'];
        $tel=$_POST['tel'];
    }
}
?>