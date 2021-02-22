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
$etiquettes = array (
	"nom"=>"Nom",
	"capitale"=>"Capitale",
	"population"=>"Population",
	"superficie"=>"Superficie",
);
$nomsChamps[] = "nom";
$nomsChamps[] = "capitale";
$nomsChamps[] = "population";
$nomsChamps[] = "superficie";
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
foreach ($nomsChamps as $nomChamp) {
    if ($tri === $nomChamp && $ordre === "ASC") {
        $ordreChamp = "DESC";
    } else {
		$ordreChamp = "ASC";
	}
	$affichage .= '<th>';
	$affichage .= '<a href="?tri='.$nomChamp.'&amp;ordre='.$ordreChamp.'">';
	$affichage .= $etiquettes[$nomChamp];
	$affichage .= '</a>';
    if ($tri === $nomChamp) {
		$affichage .= '<img src="images/'.$ordre.'.svg" alt="Tri par '.$tri.'" />';
	}
	$affichage .= '</th>';
}
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
