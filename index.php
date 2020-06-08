<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 2 exercice 3</title>
</head>
<body>
    <p>
        <?php
        $age = 5;
        $gender = 'Femme';
        if ($gender == 'Homme' && $age >= 18 ){
            echo 'Vous êtes un homme et vous êtes majeur';
        }else if ($gender == 'Homme' && $age < 18){
            echo 'Vous êtes un homme et vous êtes mineur';
        }else if ($gender == 'Femme' && $age >= 18){
            echo 'Vous êtes une femme et vous êtes majeure';
        }else if ($gender == 'Femme' && $age < 18){
            echo 'Vous êtes une femme et vous êtes mineur';
        }
        ?>
    </p>
</body>
</html>