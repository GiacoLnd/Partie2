<h1>Exercice 8</h1>

<h2>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</h2>


<?php

$image = "http://my.mobirise.com/data/userpic/764.jpg";

function afficherImage($image){
    $result = "";
    for ( $i=1; $i <= 4; $i++) {
        $result .=  "<img src='$image'>";
    }
    return $result;
}


echo afficherImage($image);