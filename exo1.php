<a href=".">Retour</a>

<h1>Exercice 1</h1>
<p>Créer une fonction personnalisée <code>convertirMajRouge()</code> permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.</p>

<style>
    .red {
        color: red;
    }

    .redMaj {
        color: red;
        text-transform: uppercase;
    }
</style>

<h2>Résultat</h2>

<?php
    $texte = "Mon texte en paramètre";
    echo convertirMajRouge($texte);
    echo convertirMajRouge2($texte);
    echo convertirMajColor($texte, "#cfe456");

    function convertirMajRouge(string $texte = "Aucun texte défini !") {
        return "<p class='red'>".mb_strtoupper($texte)."</p>";
    }

    function convertirMajRouge2(string $texte = "Aucun texte défini !") {
        return "<p class='redMaj'>".$texte."</p>";
    }

    function convertirMajColor(string $texte = "Aucun texte défini !", string $color = "black") {
        return "<p style='color:$color'>".mb_strtoupper($texte)."</p>";
    }
?>