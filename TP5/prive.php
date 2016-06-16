<!DOCTYPE html>
<!--
Copyright (C) 2016 Christophe Lecroq <christophe.lecroq@gmail.com>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->

<?php
/**
 * Le code suivant est montré à des fins d'apprentissage. Ne pas utiliser en production
 */
$hash_a_trouver = "7604da8641ea843a6d7b47b220a1704eb1dac0a195dd511e5b36d419cc87c033bc8aa980691bf3f26c3bd7e12e8c3803e30956e4b04b4b2f8e6bbf0c9c03a1b8";

$message_secret = "<p>Mon numéro de carte banquaire est : <br /> 231 456 798 231 545</p><br><p>Clé : 124</p>";

$login = $_POST["login"];
$password = $_POST["password"];

$password_hash = hash("sha512", $password);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <h1 class="col-md-offset-2 col-md-6 text-center">Mes informations privées</h1>
            <div class="col-md-offset-2 col-md-6">
                <div class="jumbotron">
                    <?php
                    if ($password_hash === $hash_a_trouver) {
                        echo $message_secret;
                    } else {
                        printf("Essaie encore !");
                    }
                    ?>
                </div>
            </div>
        </div>

    </body>
</html>
