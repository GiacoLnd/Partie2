<h1>Exercice 10</h1>

<h2>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire

complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-
mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :

« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).</h2>


<?php

$nomsInput = ["Nom", "Prenom", "email", "Ville"];


    echo afficherInputs($nomsInput);

    function afficherInputs(array $nomsInput = ["Non défini"]) {
        $result = "<form action='#' method='POST'>";
        foreach ($nomsInput as $input) {
            $minInput = mb_strtolower($input);
            $result .= "<label for='$minInput'>$input</label><br>
                        <input type='text' name='$minInput' id='$minInput'><br>";
        }
        $result .= "</form>";
        return $result;
    }
   
   
$element2 = ["Monsieur","Madame","Mademoiselle"];   
   
   
    function afficherGenre($element2) {
        $result = "<form action='#' method='POST'>";
        foreach ($element2 as $value) {
            $result .= "<input type='radio' id='$value' name ='genre' ";
            $result .= "<label for = 'genre'>$value<br></label>";
        }
        $result .= "</form>";
        return $result;
        }
    
    
        echo afficherGenre($element2);


$elements = ["Développeur Logiciel","Designer web","Intégrateur", "Chef de projet"];
        echo afficherListeDeroulante($elements);
    
        function afficherListeDeroulante(array $elements = ["Non défini"]) {
            $result = "<form action='#' method='POST'>";
            $result .= "<select name='civilite'>";
            foreach ($elements as $option) {
                $result .= "<option value='$option'>$option</option>";
            }
            $result .= "</select></form>";
            return $result;
        }
?>

<br><input type ="submit">