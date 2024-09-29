<h1>Exercice 9</h1>
<h2>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</h2>

<?php

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

    ?>