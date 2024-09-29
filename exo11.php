<h1>Exercice 11</h1>

<h2>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.</h2>



<?php 
$date = "2018-02-13";
$fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE);
$fmt->setPattern('EEEE dd MMMM YYYY');
echo $fmt->format(new DateTime($date));

?>