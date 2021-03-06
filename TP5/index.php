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
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <h1 class="col-md-offset-2 col-md-6 text-center">Authentification</h1>

            <form class="col-md-6 col-md-offset-2" name="authentification" method="post" action="prive.php">
                <fieldset class="form-group">
                    <label for="login">Login</label>
                    <input placeholder="Login" id="login"  name="login" class="form-control">
                </fieldset>
                <fieldset class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" placeholder="Mot de passe" name="password" id="password" class="form-control">
                    <input class="btn btn-primary" type="submit" value="OK"/>
                </fieldset>
            </form>

        </div>

    </body>
</html>
