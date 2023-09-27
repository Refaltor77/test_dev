<?php


/*
 * Développeur PHP, test rédigé par @refaltor77.
 *
 * les test devront tous être stocké sur un de vos repo github, avec des commits propre.
 * /!\ Le code doit être commenté étape par étape
 *
 * Tuto git: https://www.youtube.com/watch?v=gp_k0UVOYMw
 */




# TEST 11: Résous l'erreur
# ---
function calculMoyenne($valeurs) {
    $somme = 0;
    $n = count($valeurs);

    for ($i = 0; $i <= $n; $i++) {
        $somme += $valeurs[$i];
    }

    return $somme / $n;
}

$val = [10, 20, 30, 40, 50];
$moyenne = calculMoyenne($val);
echo "La moyenne est : " . $moyenne;
# ---