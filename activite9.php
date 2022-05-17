<?php

$nombres = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$cartes = ["♦", "♥", "♣", "♠"];
$deck = [];
$random = rand(1000, 10000);

for ($i = 0; $i < count($cartes); $i++) {
    for ($j = 0; $j < count($nombres); $j++) {
        $deck[] = $nombres[$j] . $cartes[$i];
    }
}
for ($i = 0; $i < $random; $i++) {
    $carteAlt1 = rand(0, 51);
    $carteAlt2 = rand(0, 51);

    $temp = $deck[$carteAlt1];
    $deck[$carteAlt1] = $deck[$carteAlt2];
    $deck[$carteAlt2] = $temp;
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
        <main>
            <h1>Activité 9</h1>
            <h1>Environnement de développement Web 1</h1>
            <form class="inline" action="activite9.php">
                <input type="submit" value="Rebrassez">
            </form>
            <p class="inline">le jeux de carte.</p>
            <table>
                <tr>
                    <?php for ($i = 0; $i < 52; $i++) : ?>
                        <?php if (mb_substr($deck[$i], -1, 1) == "♥" || mb_substr($deck[$i], -1, 1) == "♦") : ?>
                        <td class="redcard"><?= $deck[$i] ?></td>
                        <?php else : ?>
                            <td class="blackcard"><?= $deck[$i] ?></td>
                            <?php endif ?>
                        <?php if (($i + 1) % 13 == 0) : ?>
                </tr><?php if ($i <> 51) : ?>
                    <tr> <?php endif ?>
                <?php endif ?>
            <?php endfor ?>
            </table>
        </main>
        <footer>
            Projet Final: Vincent Dubois #2295393
        </footer>
    </div>
</body>

</html>