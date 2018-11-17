
function mfSaveCkEdit(rsUrlPost, rData, rfCallbackReponse) {
    //Appel ajax avec jquery

    $( document ).ready(function() {
        $.ajax({
            type: "POST",
            url: rsUrlPost,
            data: { "data" : rData }, 
            success: rfCallbackReponse, 
            dataType: "json"
        });
        //Renvoie false pour ne rien faire cote formulaire client
        return false;
    });
   
}


/**
 * Exemple de recuperation de contenu json et de traitement
 * dans le callback
 */
function mfChargeContenuJson() {
    var data_file = "http://www.tutorialspoint.com/json/data.json";
    //Objet request (attention aux autres navigateurs ca peut changer !)
    var http_request = new XMLHttpRequest();
    //Fonction callback
    http_request.onload = function(){
       //Si etat ok
       if (http_request.readyState == 4  ){
           var lsReponseJson = http_request.responseText;
          //On parse la reponse en json
          var jsonObj = (lsReponseJson) ? JSON.parse(http_request.responseText) : null;
          if (jsonObj == null) {
             alert("Probleme de recuperation du json blablabla");
          } else {
             //On ecrit dans le div concerne 
             document.getElementById("moncontenu").innerHTML = "Son pr&eacute;nom est " + jsonObj.name;
        }
       }
    }
    //Ouvre la connexion
    http_request.open("GET", data_file, true);
    //Envoie des donnees
    http_request.send();
 }

 /**
 * Envoie des donnees et recupere la reponse en json
 * ATTENTION : cote serveur il faut donc ecrire un texte json dans la reponse
 * @param rURL : L'URL pour poster les donnees
 * @param rData : Les donnees a poster
 * @param rCallback : Fonction callback, elle doit prendre en parametre un json
 *                    Cette fonction callback servira a informer l'utilisateur
 */
function mfEnvoieDonnees(rURL, rData, rCallback) {
    //Objet request (attention aux autres navigateurs ca peut changer !)
    var http_request = new XMLHttpRequest();
    //Fonction callback
    http_request.onload = function(){
       //Si etat ok
       if (http_request.readyState == 4  ){
           var lsReponseJson = http_request.responseText;
          //On parse la reponse en json
          var jsonObj = (lsReponseJson) ? JSON.parse(http_request.responseText) : null;
          if (jsonObj == null) {
             alert("Probleme de recuperation du json !");
          } else {
             rCallback(jsonObj);
        }
       }
    }
    //Ouvre la connexion
    http_request.open("POST", rURL, true);
    //Envoie des donnees
    http_request.send(rData);
 }