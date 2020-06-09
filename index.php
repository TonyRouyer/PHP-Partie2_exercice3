<?php 
    $age = 21;
    $gender = 'Homme';
    if ($gender == 'Homme' && $age < 18 && $age > 0) {
        $message = 'Vous êtes un homme et vous êtes mineur';
    }else if ($gender == 'Homme' && $age >= 18 && $age < 125) {
        $message = 'Vous êtes un homme et vous êtes majeur';
    }else if ($gender == 'Femme' && $age < 18 && $age > 0) {
        $message = 'Vous êtes une femme et vous êtes mineure';
    }else if ($gender == 'Femme' && $age >= 18 && $age < 125) {
        $message = 'Vous êtes une femme et vous êtes majeure';
    }else {
        $message = 'Votre âge ou votre genre n\'est pas valide';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Partie 2 exercice 3</title>
    </head>
    <body>
        <p><?= $message ?></p>
    </body>
</html>