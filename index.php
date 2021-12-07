<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            $age = 18;
            $gender = 'Cis';
            if ($age >= 18 && $gender == 'Homme') {
                echo 'Vous êtes un homme et vous êtes majeur.';
            } else if ($age < 18 && $gender == 'Homme') {
                echo 'Vous êtes un homme et vous êtes mineur.';
            } else if ($age >= 18 && $gender == 'Femme') {
                echo 'Vous êtes une femme et vous êtes majeur.';
            } else if ($age < 18 && $gender == 'Femme') {
                echo 'Vous êtes une femme et vous êtes mineur.';
            } else {
                echo 'Vous n\'appartenez pas une catégorie listés dans notre base de donnée.';
            }
        ?>
    </p>
</body>
</html>