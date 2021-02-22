<?php
include('Directive.class.php');
?><!DOCTYPE html>
<html lang="fr">
<head>
<title>Exercice pas à pas</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="pagestatique.css" media="all" />
<link rel="stylesheet" href="directives.css" media="all" />
</head>

<body>
<div class="interface">
	<input type="checkbox" class="afficher" name="afficher" id="afficher_tout"/><label for="afficher_tout" title="Afficher toutes les solutions">⚑</label>
	<header>
		<h1>Exercice pas à pas</h1>
	</header>
	<section class="body">
	<?php echo $affichage; ?>
	</section>
</div>
</body>
</html>
