<?php

$motDePasse = $_POST["motDePasse"] ?? "";

function bruteForce($motDePasse)
{
    $motDePasse = trim($motDePasse);
    $char = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    for ($compteur1 = 0; $compteur1 < 35; $compteur1++) {
        for ($compteur2 = 0; $compteur2 < 35; $compteur2++) {
            for ($compteur3 = 0; $compteur3 < 35; $compteur3++) {
                for ($compteur4 = 0; $compteur4 < 35; $compteur4++) {
                    $test = $char[$compteur1] . $char[$compteur2] . $char[$compteur3] . $char[$compteur4];
                    if (trim($test) == $motDePasse) {
                        echo "Mot de passe vérifié: " . $motDePasse . "<br>";
                        return;
                    }
                }
            }
        }
    }
    if (trim($test) <> $motDePasse) {
        echo "Mot de passe vérifié: " . $motDePasse . "<br>Contient un ou plusieur caractère invalide.<br>";
        return;
    }
}
function timeRunned($motDePasse)
{
    $start_time = microtime(true);
    bruteForce($motDePasse);
    $end_time = microtime(true);
    $execution_times[] = ($end_time - $start_time);
    echo "Temps d'execution: " . $execution_times[0] . "<br><br>";
}
timeRunned("hb0e1");
timeRunned("auto");
timeRunned("z5e8");

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
            <form action="activite10.php" method="post">
                <label for="motDePasse">
                    Condition:
                    <ul>
                        <li>4 charactères totaux</li>
                        <li>Les lettres minuscules sont autorisées</li>
                        <li>Tous les chiffres sont autorisés</li>
                    </ul>
                </label>
            </form>
            <section>
                
            </section>
        </main>
        <footer>
            Projet Final: Vincent Dubois #2295393
        </footer>
    </div>
</body>

</html>