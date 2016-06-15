<?php

/*
 * Copyright (C) 2016 Christophe Lecroq <christophe.lecroq@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Masque un mot en retournant des tirets à la place des lettres
 * @param Chaine $mot_a_masquer
 */
function genererMasque($mot_a_masquer, array $lettres_decouvertes) {
    $nb_lettres = strlen($mot_a_masquer);

    $mot_masque = "";
    for ($index = 0; $index < $nb_lettres; $index++) {

        if (!empty($lettres_decouvertes) && in_array($mot_a_masquer[$index], $lettres_decouvertes)) {
            $mot_masque .= $mot_a_masquer[$index] . " ";
        } else {
            $mot_masque .= "_ ";
        }
    }

    return $mot_masque;
}

/**
 * Retourne qu'un seul charactère
 * @param String $entree
 * @return Char
 */
function verifierLettre($entree) {
    return strtolower($entree[0]);
}

$mots = ["trone", "roi", "blanc", "dragon", "marcheur", "kaleesi"];
$lettres_trouvees = [];

$mot_a_trouver = $mots[rand(0, count($mots) - 1)];

$trouve = FALSE;
$tour = 1;
$limite = strlen($mot_a_trouver) * 2;

$mot_masque = genererMasque($mot_a_trouver, $lettres_trouvees);

while ($trouve != TRUE && $tour < $limite + 1) {

    echo 'Tour ' . $tour . " : " . $mot_masque;

    $lettre = verifierLettre(fgets(STDIN));

    $lettres_trouvees[] = $lettre;
    $mot_masque = genererMasque($mot_a_trouver, $lettres_trouvees);

    $trouve = stripos($mot_masque, "_") === FALSE;

    $tour++;
}

if ($trouve) {
    echo "Bravo ! Le mot à trouver été : " . $mot_a_trouver;
} else {
    echo "Dommage ! Le mot à trouver été : " . $mot_a_trouver;
}



