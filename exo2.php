<a href=".">Retour</a>

<h1>Exercice 2</h1>
<p>Soit le tableau suivant : <code>$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];</code><br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.</p>

<h2>Résultat</h2>

<?php
    $capitales = [
        "France"=>"Paris",
        "Allemagne"=>"berlin",
        "USA"=>"Washington",
        "Italie"=>"Rome"
    ];

    echo afficherTableHTML($capitales);

    function afficherTableHTML(array $capitales = ["clé" => "valeur"]): string {
        ksort($capitales);
        $result = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($capitales as $pays => $capitale) {
                        $result .=
                            "<tr>
                                <td>".mb_strtoupper($pays)."</td>
                                <td>".ucfirst($capitale)."</td>
                            </tr>";
                    }
        $result .= "</tbody></table>";
        return $result;
    }
?>