<?php
date_default_timezone_set('America/Toronto');
$date = date('h:i');
$orderdate = explode(':', $date);
$heures = $orderdate[0];
$minutes   = $orderdate[1];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>tableau de temps</title>
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
            <?php for ($col = 1; $col <= 12; $col++) { ?>
                <div class="cols">
                    <?php for ($row = 0; $row <= 59; $row++) { ?>
                        <?php if (($row == $minutes) && ($col == $heures)) { ?>
                            <div class="rows truetime">
                                <p><?php if ($col < 10) {
                                        echo "0" . $col;
                                    } else {
                                        echo $col;
                                    } ?>:<?php if ($row < 10) {
                                                                                                    echo "0" . $row;
                                                                                                } else {
                                                                                                    echo $row;
                                                                                                } ?></p>
                            </div>
                        <?php } else { ?>
                            <div class="rows">
                                <p><?php if ($col < 10) {
                                        echo "0" . $col;
                                    } else {
                                        echo $col;
                                    } ?>:<?php if ($row < 10) {
                                                                                                    echo "0" . $row;
                                                                                                } else {
                                                                                                    echo $row;
                                                                                                } ?></p>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </main>
        <footer>
            Projet Final: Vincent Dubois #2295393
        </footer>
    </div>
</body>

</html>