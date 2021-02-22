<?php
function menu() {
	$courant = substr(basename($_SERVER['PHP_SELF']), 5, 2);
	$resultat = '';
	$resultat .= '<nav>';
	$resultat .= '<ul>';
	for ($i = 1; $i <= 19; $i += 1) {
		$no = str_pad($i, 2, "0", STR_PAD_LEFT);
		if ($courant === $no) {
			$resultat .= '<li class="courant">';
		} else {
			$resultat .= '<li>';
		}
		$resultat .= '<a href="index'.$no.'.php">';
		$resultat .= 'Étape '.$no.'';
		$resultat .= '</a>';
		$resultat .= '</li>';
	}
	$resultat .= '</ul>';
	$resultat .= '</nav>';
	return $resultat;
}
