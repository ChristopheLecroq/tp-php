# TP en PHP  (@codingschool)

## TP 0 : Le classique Hello World !
Notions : Sortie de la console

Affichez sur la sortie la ligne suivante (ou ce que vous voulez :) ) : Hello World ! 

## TP 1 : Calculatrice 
Notions : opérations mathématiques

### Addition

Saisissez 2 nombres, additionnez les et affichez la sortie suivante :  "La somme de x + y est égale à z."

### Multiplication, modulo et puissance

Même exercice que ci-dessus mais adaptez le code pour faire une multiplication, un modulo et une élévation à la puissance.

## TP 2 : Trouvez le nombre
Notions : Boucle, structure conditionnelle

Générez un nombre aléatoire entre deux bornes et cherchez à le trouver en indiquant si le nombre proposé est plus petit ou plus grand.

Bonus : Limitez le nombre de coups

## TP 3 : Le pendu
Notions : Chaine, tableau, boucle

Dans un tableau, stockez une dizaine de mots puis cherchez lettre par lettre à "deviner" le mot.

N.B : Vérifiez bien que si une lettre est présente plusieurs fois, il faut l'afficher plusieurs fois.

Bonus : Limitez le nombre de coups, affichez les lettres utilisées.

## TP 4 : Le distributeur de billet
Notions : Chaine, tableau, boucle, fonction 

Le but est de simuler le fonctionnement d'un distributeur automatique de billet de billets de 10€ (uniquement !). Pour ce faire, vous devez :

1. Entrer le code de la carte (ex : 1234) (Attention vous n'avez que 3 essais, le distributeur avalera votre carte si vous ne saisissez pas le bon code.)
2. Indiquez le montant à retirer (Il faut vérifier que le montant soit supérieur ou égal à 10€ et que le distributeur puisse délivrer la somme en billet de 10€.
3. La banque plafonne les retraits à 500€ et de base vous ne disposez que de 200€ sur votre compte.
4. Demandez si la personne désire un ticket
5. Affichez la somme distribuée, simulez l'impression du ticket et rappelez à l'utilisateur qu'il doit récupérer sa carte

## TP 5 : Authentification
Notions : Page php, formulaire

Le but est de faire deux pages : l'une contient un formulaire d'identification (login/mdp), l'autre une page à l'accès restreint.

1. Entrez un login et un mot de passe dans un formulaire.
2. Affichez un message si le mot de passe ou le login est incorrect.
3. Si le mot de passe et le login sont corrects, affichez la page "protégée". 

## TP 6 : Listes liées
Notions : PHP, Ajax, jQuery, JSON

Faire varier le résultat de la deuxième liste en fonction de la valeur choisie dans la première.

## TP 7 : Générateur de mot de passe
Notions : Chaine, boucle, fonction

Un bon mot de passe ne doit pas être facilement déductible et contenir beaucoup de caractères. Le problème est que ce genre de mot de passe est souvent difficile à retenir.
Il existe une astuce pour construire des mots de passes robustes et facile à retenir. 

1. Le premier niveau consiste à saisir une phrase et à prendre la première lettre de chaque mot.
    ex : "Je ne vois pas le rapport avec la Bretagne" => "JnvplralB"
2. Le second niveau devra prendre en compte certains caractères spéciaux.
    ex : "C'est pas faux !" => "C'epf!"
3. Enfin, le dernier niveau devra laisser apparaitre tous les chiffres.
    ex : "Je vais sur mes 884 quand même !" => "Jvsm884qm!"

Bonus : Attribuez une évaluation (faible, moyen, bon, très bon) selon le niveau de complexité et le nombre de caractères générés.

Faible : Niveau 1 et < 8
Moyen : Niveau 2 et <8 ou Niveau 1 > 8
Bon : Niveau 3 et <8 ou Niveau 2 > 8
Très bon : Niveau 3 > 8

