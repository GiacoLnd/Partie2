<h1>Exercice 14</h1>
<h2>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.</h2>

<?php

$email = "elan@elan-formation.fr";


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("L'adresse $email est une adresse e-mail valide");
  } else {
    echo("L'adresse $email est une adresse e-mail invalide");
  }
  


?>