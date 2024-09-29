<a href=".">Retour</a>

<h1>Exercice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme : <code>https://fr.wikipedia.org/wiki/[nom_ville]</code><br>
Le tableau passé en argument sera le suivant :<br>
<code>$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];</code></p>

<h2>Résultat</h2>

<?php
    $capitales = [
        "France"=>"Paris",
        "Allemagne"=>"berlin",
        "USA"=>"Washington",
        "Italie"=>"Rome"
    ];

    $capitales2 = [
        "France" => 
        [
            "Ville" => "Paris",
            "Site" => "http://www.paris.fr"
        ],
        "Allemagne" => 
        [
            "Ville" => "Berlin", 
            "Site" => "http://www.berlin.de"
        ]
    ];

    echo afficherTableHTML($capitales);
    echo afficherTableHTML2($capitales2);

    function afficherTableHTML(array $capitales = ["clé" => "valeur"]): string {
        ksort($capitales);
        $result = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                            <th>Wiki</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($capitales as $pays => $capitale) {
                        $result .=
                            "<tr>
                                <td>".mb_strtoupper($pays)."</td>
                                <td>".ucfirst($capitale)."</td>
                                <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien wiki</a></td>
                            </tr>";
                    }
        $result .= "</tbody></table>";
        return $result;
    }

    function afficherTableHTML2(array $capitales = ["clé" => "valeur"]): string {
        ksort($capitales);
        $result = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                            <th>Wiki</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($capitales as $pays => $capitale) {
                        $result .=
                            "<tr>
                                <td>".mb_strtoupper($pays)."</td>
                                <td>".ucfirst($capitale['Ville'])."</td>
                                <td><a href='".$capitale['Site']."' target='_blank'>Lien wiki</a></td>
                            </tr>";
                    }
        $result .= "</tbody></table>";
        return $result;
    }
?>