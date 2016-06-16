# Mémo PHP  (@codingschool)


## Variable, tableau, constante

```php
$une_variable = 1; 
$un_tableau = [] // ou array() vide ;
$un_tableau_rempli= [1, 2, 3];
define("PI", 3.14);
```
## Les types

```php
$chaine = "Hodor";
$charactere = 'k';
$entier = 1;
$flottant = 1.2;
$booleen = TRUE // ou FALSE;
$null = NULL; // Attention NULL correspond à une absence de valeur
```

## Concaténation de chaines
```php
$nom = "Hugo";
$nom_prenom = "Victor" . $nom;
```

## Opérateurs & mathématiques

```php
$somme = 1 + 1;
$difference = 1 - 1;
$multiplication = 1 * 1;
$division = 1 / 1;
$modulo = 1 % 1;
$puissance = 1 ** 1;
$arrondi = round(0.2555, 2);  // 0.26
$racine_carre = sqrt(9);
```

## Les opérateurs de test
```php
$egalite = 1 == 1;
$egalite_type = FALSE === "FALSE" // Retournera FALSE car on compare un booléen et une chaine
$inferieur = 1 < 2;
$inferieur_ou_egal = 1 <= 2;
$superieur = 2 > 1;
$superieur_ou_egal = 2 >= 1;
$different = 'c' != 't';
$et = 1 == 1 && 2 == 2;
$ou = 1 == 1 || 2 == 2;
```

## Structures conditionnelles

### Si, sinon si, sinon
```php
if($i == 1){
}elseif($i == 2){
}else{
}
```

### Switch
```php
switch ($test) {
    case 1:
        break;
    default:
        break;
}
```

## Ternaire
```php
$pair = ($entier % 2 == 0) ? TRUE : FALSE;
```

## Boucles
### While

```php
while ($continuer == true)
{
}
```

### For
```php
for ($index = 0; $index < count($array); $index++) {
}
```

## Date
```php
$date_fr = date("d/m/y H:i:s");
```

## Inclure un autre fichier PHP
```php
<?php 
    include("header.php"); 
?>
```