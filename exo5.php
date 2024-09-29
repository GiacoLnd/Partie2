<a href=".">Retour</a>

<h1>Exercice 5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?php
    $nomsInput = ["Nom", "Prenom", "CP", "Ville", "Pays"];
    $nomsInput2 = ["Nom" => "text", "Prenom" => "text", "Email" => "email", "Date" => "date"];

    echo afficherInputs($nomsInput);
    echo afficherInputs2($nomsInput2);

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

    function afficherInputs2(array $nomsInput = ["Non défini"]) {
        $result = "<form action='#' method='POST'>";
        foreach ($nomsInput as $input => $type) {
            $minInput = mb_strtolower($input);
            $result .= "<label for='$minInput'>$input</label><br>
                        <input type='$type' name='$minInput' id='$minInput'><br>";
        }
        $result .= "</form>";
        return $result;
    }
?>