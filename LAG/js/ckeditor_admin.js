const URL_POSTADMIN = "./postData.php";


function callBackSave(rJsonReponse) {
    alert((rJsonReponse && rJsonReponse.etat) ? "Modification effectuée" : "La modification n'a pas eu lieu");
}
/**
 * Permet d'envoyer les donnees vers le serveur 
 * pour sauvegarde
 * @param {string} rId : Id ayant servi dynamiquement a identifier le div (1, 2, 3, ...)
 * @param {object} rEditor : Objet CKEditor
 */
function mfSave(rId, rEditor) {
    var lsHtml = rEditor.getData();
    //console.log(lsHtml);
    //On encapsule nos donnees dans un json pour passer d'autres
    //informations au serveur
    var jsonData = {
        "id"   : rId, 
        "data" : lsHtml
    };
    //Post les donnees
    mfSaveCkEdit(URL_POSTADMIN, jsonData, callBackSave);
// rt((rReponse.etat) ? "Modification effectuée" : "La modification n'a pas eu lieu"); 
//TODO pop up
    //                 });
}

/**
 * Creation d'un composant de saisie CKEditor
 * @param {string} rId : Id pour dynamiquement identifier le div (1, 2, 3, ...)
 */
function createEditor(rId) {
    InlineEditor
    .create( document.querySelector( '#diveditor'+rId ), {
        toolbar: [ 'headings', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { modelElement: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { modelElement: 'heading1', viewElement: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { modelElement: 'heading2', viewElement: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { modelElement: 'heading3', viewElement: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { modelElement: 'heading4', viewElement: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' }
            ]
        }
    } )
    .then( editor => {
                //Ajoute evenement onclick sur le bouton concerne
                var button = document.getElementById('save'+rId);
                if (button) {
                    button.onclick = function() {
                        //Appelle la fonction mfSave en donnant l'id et 
                        //l'objet en parametre
                        mfSave(rId, editor);
                    }
                }
            } )
    .catch( error => {
                        console.log( error );
                    });
}

/**
 * Creation des composants de saisie
 */
function initEditors() {

    
    createEditor("1"); // Act
    createEditor("2"); //Aut
    createEditor("3"); //Acc
    createEditor("4"); //Cont
    createEditor("5"); //Espace
    createEditor("6"); //Pcpe
    createEditor("7") //Cont2
}



/**
 * Fonction de chargement initial
 */
window.onload = function() {
    initEditors();
}