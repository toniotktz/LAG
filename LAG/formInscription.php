<!DOCTYPE html>
<html lang="fr">
<?php require "header.php"?>
<body>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <form>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="Nom">Nom:</label>
                        <input type="text" class="form-control" id="Nom" placeholder="Entrer votre nom" name="nom" />
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="Prenom">Prenom:</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Entrer votre Prenom" name="prenom" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Entrer votre Email" name="email" />
                </div>
                <div class="form-group">
                    <label for="tel">Telephone:</label>
                    <input type="tel" class="form-control" id="tel" placeholder="Entrer votre numero de telephone" name="tel" />
                </div>
                <div class="form-group">
                    <label for="ville">Ville:</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Entrer la ville ou vous habitez" name="ville" />
                </div>
                <div class="form-group">
                    <label for="codePostal">Code postal:</label>
                    <input type="text" class="form-control" id="codePostal" placeholder="Entrer votre code postal" name="codePostal" />
                </div>
            </form>
        </div>
    </div>
</body>
<?php require "footer.php"?>
</html>