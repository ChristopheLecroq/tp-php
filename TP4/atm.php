<?php
	//Déclaration des variables
$nombre_erreur = 0;
$code = '';
$ticket = false;
$montant = 10;
$erreur = true;

echo "Bonjour\n\n";

//boucle vérification code. 3 essais maxi
while ($nombre_erreur < 3 && $erreur == true){
	echo "Merci d'entrer votre code:\n";
	$code = readline();
	if (verif_code($code) == false){
		$nombre_erreur++;
		if ($nombre_erreur < 2){
			echo "Mauvais code! Nouvel essai.\n";
		}
	}
	else {
		$erreur = false;
	}
}

//fin de la vérification du code
if ($nombre_erreur == 3) {
	echo "Vous êtes un boulet\nVotre carte est avalée.";
}
else {
	//pas d'erreur de code, on continue
	$erreur = true;
	while ($erreur == true){
		echo "Entrer le montant désiré\n";
		$montant = readline();
		if (verif_montant($montant) == true){
			$erreur = false;
		}
	}
	//demande de ticket
	echo "Voulez-vous un  ticket ? (oui/non)\n";
	if (readline() == "oui"){
		$ticket = true;
	}

	for ($i = 10; $i <= $montant; $i += 10){
		echo "Montant distribué $i €\n";
	}
	echo "Retirez vos billets\n";

	if ($ticket == true){
		echo "N'oubliez pas votre ticket\n";
	}

	echo "Merci de retirer votre carte\n";
}



function verif_montant($montant){
	if ($montant <= 10 || $montant % 10 != 0){
		echo "Supérieur à 10, et multiples de 10 seulement";
		return false;
	}
	$message_banque = la_banque($montant);
	if ($message_banque != "OK"){
		echo $message_banque;
		return false;
	}
	return true;
}

function la_banque($montant){
	if ($montant > 500){
		return "Le montant demandé dépasse le plafond";
	}
	if ($montant > 200){
		return "Vous ne disposez que de 200 euros";
	}
	return "OK";
}

function verif_code($code){
	if ($code != 1234){
		return false;
	}
	return true;
}
?>