<?php


function bruteForce($motDePasse)
{
    $motDePasse = trim($motDePasse);
    $char = [" ", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    for ($compteur1 = 0; $compteur1 < 36; $compteur1++) {
        for ($compteur2 = 0; $compteur2 < 36; $compteur2++) {
            for ($compteur3 = 1; $compteur3 < 36; $compteur3++) {
                for ($compteur4 = 1; $compteur4 < 36; $compteur4++) {
                    for ($compteur5 = 1; $compteur5 < 36; $compteur5++) {
                        $test = $char[$compteur1] . $char[$compteur2] . $char[$compteur3] . $char[$compteur4] . $char[$compteur5];
                        if (trim($test) == $motDePasse) {
                            echo "Mot de passe vérifié: " . $motDePasse . "<br>";
                            return;
                        }
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
timeRunned("hb1");
timeRunned("auto");
timeRunned("a2c3x");