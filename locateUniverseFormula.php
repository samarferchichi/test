locateUniverseFormula.php

********************************************

<?php

function locateUniverseFormula($racine, $nomfichier) {
    $check = null;
	$dp = opendir($racine);
	while($entree = readdir($dp)){
		if(is_file("$racine/$entree") &&
		   strtolower($entree) == $nomfichier) {
			// traitement pour le fichier trouvé 
			$check = realpath($entree);
		}elseif (!is_file("$racine/$entree"))// c'est un dossier! 
		{ 
			rechercher("$racine/$entree",$nomfichier);
		}
	}

    return $check;
}

echo locateUniverseFormula('/tmp/documents', 'universe-formula');
