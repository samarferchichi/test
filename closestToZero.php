Implémentez la fonction closestToZero pour renvoyer l'entier du tableau $ints le plus proche de zéro. S'il
y a deux entiers tout aussi proches de zéro, considérez l'entier positif comme étant le plus proche de zéro
(par exemple si $ints contient -5 et 5, retournez 5). Si $ints est vide, retournez 0 (zéro). Données : les
entiers dans $ints ont des valeurs allant de -2147483647 à 2147483647.

*******************************************************************

<?php

function closestToZero(array $ints) {
	$result = 0;
	if(!empty($ints)){
		$result = $ints[0];
		for($i=1 ; $i < count($ints) ; $i++){
			if(abs($result) > abs($ints[$i]) or
			   abs($result) == abs($ints[$i]) and 
			   $ints[$i] >$result ){
				$result = $ints[$i];
			}
		}
	}

	return $result;
}

echo closestToZero([7, -4, 9, 12, 4]);
