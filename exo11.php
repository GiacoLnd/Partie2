<h1>Exercice 11</h1>

<h2>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.</h2>



<?php 
$date = "2018-02-13";   //  entrée de la date voulue
$fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE);  //  entrée de la localisation Francaise, datetype et timeType NONE -> n'inclut pas le besoin de spécifier la date et l'heure en US Time et US date
$fmt->setPattern('EEEE dd MMMM YYYY');    // spécifie le format de la nouvelle date *jour en lettre-n° jour-mois-année*
echo $fmt->format(new DateTime($date));   // affichage de la conversion sur le nouveau type de date en prenant la variable $date

?>