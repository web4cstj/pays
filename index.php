<?php
// La connexion

// Les variables

// La composition du SQL

// L'exécution de la requête

//La composition de l'affichage
$affichage = '';

?><!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="pays.css"/>
<title>Affichage des pays</title>
</head>

<body>
<div class="interface">
	<header>
		<h1>Affichage des pays</h1>
	</header>
	<div class="body">
		<?php
		include "menu.inc.php";
		echo menu();

		// L'affichage du tableau
		echo $affichage;
		?>
	</div>
</div>
</body>
</html>
