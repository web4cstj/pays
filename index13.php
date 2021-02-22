<?php
// La connexion
$pdo = new PDO("sqlite:monde.sqlite");

// Les variables
$ordre = "ASC";
if (isset($_GET['ordre'])) {
	$ordre = $_GET['ordre'];
}
$tri = "nom";
if (isset($_GET['tri'])) {
	$tri = $_GET['tri'];
}
$ORDER = "ORDER BY $tri $ordre";
$nomsChamps[] = "nom";
$nomsChamps[] = "population";
$nomsChamps[] = "capitale";
$CHAMPS = implode(",", $nomsChamps);

// La composition du SQL
$SQL = "SELECT $CHAMPS FROM pays $ORDER";

// L'exécution de la requête
$req = $pdo->query($SQL);

//La composition de l'affichage
$affichage = '';
$affichage .= '<table border="1">';
$affichage .= '<thead>';
$affichage .= '<tr>';
$affichage .= '<th><a href="?tri=nom&amp;ordre=ASC">Nom</a></th>';
$affichage .= '<th><a href="?tri=population&amp;ordre=ASC">Population</a></th>';
$affichage .= '<th><a href="?tri=capitale&amp;ordre=ASC">Capitale</a></th>';
$affichage .= '</tr>';
$affichage .= '</thead>';
$affichage .= '<tbody>';
while (($enr = $req->fetch()) !== false) {
	$affichage .= '<tr>';
	foreach($nomsChamps as $nomChamp) {
		$affichage .= '<td>'.$enr[$nomChamp].'</td>';
	}
	$affichage .= '</tr>';
}
$affichage .= '</tbody>';
$affichage .= '</table>';
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
