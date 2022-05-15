<?php


$motDePasse = $_POST["motDePasse"] ?? "";

function bruteForce($motDePasse)
{
    $motDePasse = trim($motDePasse);
    $char = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    for ($compteur1 = 0; $compteur1 < 36; $compteur1++) {
        for ($compteur2 = 0; $compteur2 < 36; $compteur2++) {
            for ($compteur3 = 0; $compteur3 < 36; $compteur3++) {
                for ($compteur4 = 0; $compteur4 < 36; $compteur4++) {
                    $test = $char[$compteur1] . $char[$compteur2] . $char[$compteur3] . $char[$compteur4];
                    if (trim($test) == $motDePasse) {
                        return false;
                    }
                }
            }
        }
    }
    if (trim($test) <> $motDePasse) {
        return true;
    }
}

//Source: https://moodle.cmaisonneuve.qc.ca/cours/mod/assign/view.php?id=231333

//Auteur: kpresseau

//fonction pour calculer le temps d'execution d'une autre fonction

function timeRunned($motDePasse)
{
    $start_time = microtime(true);
    bruteForce($motDePasse);
    $end_time = microtime(true);
    $execution_times[] = ($end_time - $start_time);
    return $execution_times[0];
}

if (strlen($motDePasse) == 4) {
    timeRunned($motDePasse);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vincent Dubois #2295393">
    <link rel="stylesheet" href="css/style.css">
    <title>index</title>
    <style>
        .centered {
            text-align: center;
            padding-top: 57px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="index.html">
            <p>&#x2302</p>
        </a>
        <a href="tp3.php">TP3</a>
        <a href="activite9.php">A9</a>
        <a href="activite10.php">A10</a>
    </nav>
    <div class="contain">
        <main class="grid">
            <h1>Activité 10</h1>
            <h1>Environnement de développement Web 1</h1>
            <section>
                <h3 class="lefttext">Condition:</h3>
                <ul>
                    <li class="lefttext">4 charactères totaux</li>
                    <li class="lefttext">Les lettres minuscules sont autorisées</li>
                    <li class="lefttext">Tous les chiffres sont autorisés</li>
                </ul>
            </section>
            <section>
                <div class="centered">
                    <form action="activite10.php" method="post">
                        <input type="text" name="motDePasse" value="<?= $motDePasse ?>">
                        <input type="submit" value="Envoyez">
                    </form>
                </div>
            </section>
            <section>
                <?php if (strlen($motDePasse) > 0) : ?>
                    <?php if (!bruteForce($motDePasse)) : ?>
                        <h3>Mot de passe vérifié: <?= $motDePasse ?></h3>
                    <?php endif ?>
                    <?php if (bruteForce($motDePasse)) : ?>
                        <h3>Mot de passe vérifié: <?= $motDePasse ?><br>Contient un ou plusieur caractère invalide.</h3>
                    <?php endif ?>
                <?php endif ?>
                <?php if (strlen($motDePasse) <> 0) : ?>
                    <h3>Temps d'execution: <?= timeRunned($motDePasse) ?></h3>
                <?php endif ?>

                <?php if (strlen($motDePasse) == 0) : ?>
                    <h3>Aucun mot saisi.<h3p>
                        <?php endif ?>
            </section>
        </main>
        <footer>
            Projet Final: Vincent Dubois #2295393
        </footer>
    </div>
</body>

</html>