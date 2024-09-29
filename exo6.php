<a href=".">Retour</a>

<h1>Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2>Résultat</h2>

<?php
    $elements = ["Monsieur","Madame","Mademoiselle"];
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