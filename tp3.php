<?php 
date_default_timezone_set('America/Toronto');
$date = date('h:i');
$orderdate = explode(':', $date);
$heures = $orderdate[0];
$minutes   = $orderdate[1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>tableau de temps</title>
</head>

<body>
    <?php for ($col = 1; $col <= 12; $col++) { ?>
        <div class="cols">
            <?php for ($row = 0; $row <= 59; $row++) { ?>
                <?php if (($row==$minutes)&&($col==$heures)) {?>
                    <div class="rows truetime">
                        <p><?php if ($col<10){ echo "0".$col; } else { echo $col; }?>:<?php if($row<10){ echo "0".$row; } else { echo $row; }?></p>
                    </div>
                <?php } else { ?>
                    <div class="rows">
                        <p><?php if($col<10){ echo "0".$col; } else { echo $col; }?>:<?php if($row<10){ echo "0".$row; } else { echo $row; }?></p>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>
</body>

</html>