<a href=".">Retour</a>

<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php
    $elements = [
        "Choix 1" => "",
        "Choix 2" => "checked",
        "Choix 3" => ""
    ];

    echo genererCheckBox($elements);

    function genererCheckBox(array $elements) {
        $result = "<form action='#' method='POST'>";
        foreach ($elements as $label => $checked) {
            $result .= "<input type='checkbox' $checked> $label<br>";
        }
        $result .= "</form>";
        return $result;
    }
?>