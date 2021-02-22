<?php
class Directive {
	static public function init() {
		ini_set('highlight.bg', '#FFFF00');
		ini_set('highlight.comment', '#999999');
		ini_set('highlight.default', '#0000DD');
		ini_set('highlight.html', '#000000');
		ini_set('highlight.keyword', '#4466BB');
		ini_set('highlight.string', '#EE8800');
	}
	static public function affichage($etapes) {
		$resultat = '';
		$resultat .= '<form class="etapes" action="">';
		foreach ($etapes as $no=>$etape) {
			$resultat .= '<div>';
			$resultat .= self::html_numero($no);
			$resultat .= self::html_afficherSolution($no);
			$resultat .= self::html_etape($etape);
			$resultat .= '</div>';
		}
		$resultat .= '</form>';
		return $resultat;
	}
	static public function html_afficherSolution($no) {
		$resultat = '';
		$resultat .= '<input type="checkbox" name="etape['.$no.']" id="etape_'.$no.'" class="afficher"/>';
		$resultat .= '<label for="etape_'.$no.'" title="Afficher la solution">⚑</label>';
		return $resultat;
	}
	static public function html_etape($etape) {
		$resultat = '';
		$resultat .= '<div>';
		$resultat .= '<div class="enonce">'.$etape['enonce'].'</div>';
		$code = $etape['code'];
		$resultat .= '<div class="code">'.$code.'</div>';
		$resultat .= '</div>';
		return $resultat;
	}
	static public function html_numero($no) {
		$no = str_pad($no, 2, '0', 0);
		$resultat = '';
		$resultat .= '<span>';
		$resultat .= '<a href="index'.$no.'.php" target="_blank">';
		$resultat .= 'Étape '.$no;
		$resultat .= '</a>';
		$resultat .= '</span>';
		return $resultat;
	}
}
include('etapes.inc.php');
Directive::init();
$affichage = Directive::affichage($etapes);
