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
                    <input type="text" class="form-control" id="nom" placeholder="Entrer votre nom" name="nom" required/>

                    <label for="Prenom">Prenom:</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Entrer votre Prenom" name="prenom" required />

                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Entrer votre Email" name="email" required />
                </div>
                <div class="form-group col-sm-6">
                    <label for="ville">Ville:</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Entrer la ville ou vous habitez" name="ville" required/>

                    <label for="codePostal">Code postal:</label>
                    <input type="text" class="form-control" id="cp" placeholder="Entrer votre code postal" name="cp" required />

                    <label for="tel">Telephone:</label>
                    <input type="tel" class="form-control" id="tel" placeholder="Entrer votre numero de telephone" name="tel" required />
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="confirmer" value="Confirmer" />
        </form>
    </div>
</body>
<?php require "footer.php";?>
</html>