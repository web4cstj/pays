<?php
$etapes = [
	1=>[
		'enonce'=>'Faites afficher la liste des noms de pays dans un tableau HTML avec un en-tête <code>&lt;th&gt;</code>. Ne pas utiliser l\'astérisque dans la requête SQL.',
		'code'=>
<<<FIN
	<div><span class="s1">&lt;?php</span></div>
	<div><span class="s4">// La connexion</span></div>
	<div><span class="s1">\$pdo</span> <span class="s2">= new</span> <span class="s1">PDO</span><span class="s2">(</span><span class="s3">"sqlite:monde.sqlite"</span><span class="s2">);</span></div>
	<div>&nbsp;</div>
	<div><span class="s4">// La composition du SQL</span></div>
	<div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT nom FROM pays"</span><span class="s2">;</span></div>
	<div>&nbsp;</div>
	<div><span class="s4">// L'exécution de la requête</span></div>
	<div><span class="s1">\$req</span> <span class="s2">=</span> <span class="s1">\$pdo</span><span class="s2">-&gt;</span><span class="s1">query</span><span class="s2">(</span><span class="s1">\$SQL</span><span class="s2">);</span></div>
	<div>&nbsp;</div>
	<div><span class="s4">//La composition de l'affichage</span></div>
	<div><span class="s1">\$affichage</span> <span class="s2">=</span> <span class="s3">''</span><span class="s2">;</span></div>
	<div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;table border="1"&gt;'</span><span class="s2">;</span></div>
	<div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;thead&gt;'</span><span class="s2">;</span></div>
	<div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;tr&gt;'</span><span class="s2">;</span></div>
	<div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;Nom&lt;/th&gt;'</span><span class="s2">;</span></div>
	<div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/tr&gt;'</span><span class="s2">;</span></div>
	<div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/thead&gt;'</span><span class="s2">;</span></div>
	<div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;tbody&gt;'</span><span class="s2">;</span></div>
	<div><span class="s2">while ((</span><span class="s1">\$enr</span> <span class="s2">=</span> <span class="s1">\$req</span><span class="s2">-&gt;</span><span class="s1">fetch</span><span class="s2">()) !==</span> <span class="s1">false</span><span class="s2">) {</span></div>
	<div>    <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;tr&gt;'</span><span class="s2">;</span></div>
	<div>    <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;td&gt;'</span><span class="s2">.</span><span class="s1">\$enr</span><span class="s2">[</span><span class="s3">'nom'</span><span class="s2">].</span><span class="s3">'&lt;/td&gt;'</span><span class="s2">;</span></div>
	<div>    <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/tr&gt;'</span><span class="s2">;</div><div>}</div><div></span><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/tbody&gt;'</span><span class="s2">;</span></div>
	<div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/table&gt;'</span><span class="s2">;</span></div>
	<div>&nbsp;</div>
	<div><span class="s4">// Dans le body : echo \$affichage;</span></div>
	<div><span class="s1">?&gt;</span></div>
FIN
	],
	2=>[
		'enonce'=>'Faites afficher la liste des pays en ordre alphabétique en utilisant le mot-clé SQL \'<code>ASC</code>\'.',
		'code'=>
<<<FIN
	<div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT nom FROM pays ORDER BY nom ASC"</span><span class="s2">;</span></div>
FIN
	],
	3=>[
		'enonce'=>'Faites afficher la liste des pays en ordre alphabétique inversée.',
		'code'=>
<<<FIN
<div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT nom FROM pays ORDER BY nom DESC"</span><span class="s2">;</span></div>
FIN
	],
	4=>[
		'enonce'=>'Créez une variable <code>$ordre</code> en haut de la page en lui donnant la valeur \'<code>DESC</code>\' et faites en sorte que l\'ordre d\'affichage dépende de cette variable. Ensuite, donnez-lui la valeur \'<code>ASC</code>\' et validez la page.',
		'code'=>
<<<FIN
<div><span class="s1">\$ordre</span> <span class="s2">=</span> <span class="s3">&apos;ASC&apos;</span><span class="s2">;</span></div>
<div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT nom FROM pays ORDER BY nom "</span><span class="s2">.</span><span class="s1">\$ordre</span><span class="s2">.</span><span class="s3">""</span><span class="s2">;</span></div>
FIN
	],
	5=>[
		'enonce'=>'Demandez au professeur le truc pour faciliter la composition des requêtes SQL.',
		'code'=>
<<<FIN
<div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT nom FROM pays ORDER BY nom <span class="s1">\$ordre</span>"</span><span class="s2">;</span></div>
FIN
	],
	6=>[
		'enonce'=>'Ajoutez la colonne <code>\'population\'</code> à votre tableau.',
		'code'=>
<<<FIN
<div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT nom, population FROM pays ORDER BY nom</span> <span class="s1">\$ordre</span><span class="s3">"</span><span class="s2">;</div><div>...</div><div></span><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;Population&lt;/th&gt;'</span><span class="s2">;</div><div>...</div><div></span>    <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;td&gt;'</span><span class="s2">.</span><span class="s1">\$enr</span><span class="s2">[</span><span class="s3">'population'</span><span class="s2">].</span><span class="s3">'&lt;/td&gt;'</span><span class="s2">;</span></div>
FIN
	],
	7=>[
		'enonce'=>'Faites en sorte que le tableau soit trié par ordre de population (en incluant la variable <code>$ordre</code>).',
		'code'=>
<<<FIN
<div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT nom, population FROM pays ORDER BY population <span class="s1">\$ordre</span>"</span><span class="s2">;</span></div>
FIN
	],
	8=>[
		'enonce'=>'Créez une variable <code>$tri</code> en haut de la page en lui donnant la valeur <code>\'population\'</code> et faites en sorte que l\'ordre d\'affichage dépende de cette variable. Ensuite, donnez-lui la valeur <code>\'nom\'</code> et validez la page.',
		'code'=>
<<<FIN
<div><span class="s1">\$tri</span> <span class="s2">=</span> <span class="s3">&apos;population&apos;</span><span class="s2">;</span></div>
<div>...</div>
<div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT nom,population FROM pays ORDER BY <span class="s1">\$tri</span> </span><span class="s1">\$ordre</span><span class="s3">"</span><span class="s2">;</span></div>
FIN
	],
	9=>[
		'enonce'=>'Créez la variable <code>$ORDER</code> (en majuscules) qui devra comprendre toute la portion de code SQL (incluant les mots-clés SQL) qui gère le tri. Ensuite, faites en sorte que votre requête utilise cette variable.',
		'code'=>
<<<FIN
<div><span class="s1">\$ORDER</span> <span class="s2">=</span> <span class="s3"><span class="s3">"ORDER BY <span class="s1">\$tri</span> </span><span class="s1">\$ordre</span>"</span><span class="s2">;</span></div>
<div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT nom,population FROM pays <span class="s1">\$ORDER</span>"</span><span class="s2">;</span></div>
FIN
	],
	10=>[
		'enonce'=>'Ajoutez la colonne <code>\'capitale\'</code> à votre tableau.',
		'code'=>
<<<FIN
<div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT nom, population, capitale FROM pays</span> <span class="s1">\$ORDER</span><span class="s3">"</span><span class="s2">;</div><div>...</div><div></span><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;Capitale&lt;/th&gt;'</span><span class="s2">;</div><div>...</div><div></span>    <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;td&gt;'</span><span class="s2">.</span><span class="s1">\$enr</span><span class="s2">[</span><span class="s3">'capitale'</span><span class="s2">].</span><span class="s3">'&lt;/td&gt;'</span><span class="s2">;</span></div>
FIN
	],
	11=>[
		'enonce'=>'Créez le tableau indexé <code>$nomsChamps</code> (à l\'aide de la méthode longue) contenant les noms des 3 champs à afficher et utilisez-le, avec une boucle, pour afficher les cellules du tableau.',
		'code'=>
<<<FIN
    <div><span class="s1">&lt;?php</span></div>
    <div><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"nom"</span><span class="s2">;</span></div>
    <div><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"population"</span><span class="s2">;</span></div>
    <div><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"capitale"</span><span class="s2">;</span></div>
    <div>...</div>
    <div class="del">   <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;td&gt;'</span><span class="s2">.</span><span class="s1">\$enr</span><span class="s2">[</span><span class="s3">'nom'</span><span class="s2">].</span><span class="s3">'&lt;/td&gt;'</span><span class="s2">;</span></div>
    <div class="del">   <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;td&gt;'</span><span class="s2">.</span><span class="s1">\$enr</span><span class="s2">[</span><span class="s3">'population'</span><span class="s2">].</span><span class="s3">'&lt;/td&gt;'</span><span class="s2">;</span></div>
    <div class="del">   <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;td&gt;'</span><span class="s2">.</span><span class="s1">\$enr</span><span class="s2">[</span><span class="s3">'capitale'</span><span class="s2">].</span><span class="s3">'&lt;/td&gt;'</span><span class="s2">;</span></div>
    <div>   <span class="s2">foreach(</span><span class="s1">\$nomsChamps</span> <span class="s2">as</span> <span class="s1">\$nomChamp</span><span class="s2">) {</span></div>
    <div>      <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;td&gt;'</span><span class="s2">.</span><span class="s1">\$enr</span><span class="s2">[</span><span class="s1">\$nomChamp</span><span class="s2">].</span><span class="s3">'&lt;/td&gt;'</span><span class="s2">;</span></div>
    <div>   }</div>
FIN
	],
	12=>[
		'enonce'=>'Utilisez le tableau <code>$nomsChamps</code> et la fonction <code>implode</code> pour créer la chaîne <code>$CHAMPS</code> représentant la portion "champs" de la requête SQL. Ensuite, utilisez la variable <code>$CHAMPS</code> dans votre requête. (voir <a href="http://php.net/implode" target="_blank">php.net/implode</a>)',
		'code'=>
<<<FIN
    <div><span class="s1">\$CHAMPS</span> <span class="s2">=</span> <span class="s1">implode</span><span class="s2">(</span><span class="s3">","</span><span class="s2">,</span> <span class="s1">\$nomsChamps</span><span class="s2">);</span></div>
    <div>...</div>
    <div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT</span> <span class="s1">\$CHAMPS</span><span class="s3"> FROM pays</span> <span class="s1">\$ORDER</span><span class="s3">"</span><span class="s2">;</span></div>
FIN
	],
	13=>[
		'enonce'=>'Sur l\'en-tête de la colonne "Nom", faites un lien vers la page courante qui envoie la donnée <code>\'tri\'</code> avec comme valeur <code>\'nom\'</code> ainsi que la donnée <code>\'ordre\'</code> avec la valeur <code>\'ASC\'</code>. Répétez l\'opération sur les autres en-têtes. Faites en sorte de récupérer ces données (GET) pour que la requête effectue le tri en conséquence.',
		'code'=> <<<FIN
    <div><span class="s1">\$ordre</span> <span class="s2">=</span> <span class="s3">"ASC"</span><span class="s2">;</span></div>
    <div><span class="s2">if (isset(</span><span class="s1">\$_GET</span><span class="s2">[</span><span class="s3">'ordre'</span><span class="s2">])) {</span></div>
    <div>   <span class="s1">\$ordre</span> <span class="s2">=</span> <span class="s1">\$_GET</span><span class="s2">[</span><span class="s3">'ordre'</span><span class="s2">];</span></div>
    <div>}</div>
    <div><span class="s1">\$tri</span> <span class="s2">=</span> <span class="s3">"nom"</span><span class="s2">;</span></div>
    <div><span class="s2">if (isset(</span><span class="s1">\$_GET</span><span class="s2">[</span><span class="s3">'tri'</span><span class="s2">])) {</span></div>
    <div>   <span class="s1">\$tri</span> <span class="s2">=</span> <span class="s1">\$_GET</span><span class="s2">[</span><span class="s3">'tri'</span><span class="s2">];</span></div>
    <div>}</div>
    <div>...</div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;&lt;a href="?tri=nom&amp;amp;ordre=ASC"&gt;Nom&lt;/a&gt;&lt;/th&gt;'</span><span class="s2">;</span></div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;&lt;a href="?tri=population&amp;amp;ordre=ASC"&gt;Population&lt;/a&gt;&lt;/th&gt;'</span><span class="s2">;</span></div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;&lt;a href="?tri=capitale&amp;amp;ordre=ASC"&gt;Capitale&lt;/a&gt;&lt;/th&gt;'</span><span class="s2">;</span></div>
FIN
	],
	14=>[
		'enonce'=>'Créez le tableau associatif <code>$etiquettes</code> ayant comme clé le nom d\'un champ à afficher et comme valeur l\'étiquette à mettre dans l\'en-tête. Servez-vous ensuite d\'une boucle et du tableau <code>$nomsChamps</code>, pour afficher l\'étiquette (provenant de <code>$etiquettes</code>) de chaque colonne avec son lien.',
		'code'=> <<<FIN
    <div><span class="s1">&lt;?php</span></div>
    <div><span class="s1">\$etiquettes</span> <span class="s2">= array (</span></div>
    <div>   <span class="s3">"nom"</span><span class="s2">=&gt;</span><span class="s3">"Nom"</span><span class="s2">,</span></div>
    <div>   <span class="s3">"population"</span><span class="s2">=&gt;</span><span class="s3">"Population"</span><span class="s2">,</span></div>
    <div>   <span class="s3">"capitale"</span><span class="s2">=&gt;</span><span class="s3">"Capitale"</span><span class="s2">,</span></div>
    <div>);</div>
    <div>...</div>
    <div class="del"><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;&lt;a href="?tri=nom&amp;amp;ordre=ASC"&gt;Nom&lt;/a&gt;&lt;/th&gt;'</span><span class="s2">;</span></div>
    <div class="del"><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;&lt;a href="?tri=population&amp;amp;ordre=ASC"&gt;Population&lt;/a&gt;&lt;/th&gt;'</span><span class="s2">;</span></div>
    <div class="del"><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;&lt;a href="?tri=capitale&amp;amp;ordre=ASC"&gt;Capitale&lt;/a&gt;&lt;/th&gt;'</span><span class="s2">;</span></div>
    <div><span class="s2">foreach (</span><span class="s1">\$nomsChamps</span> <span class="s2">as</span> <span class="s1">\$nomChamp</span><span class="s2">) {</span></div>
    <div>   <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;'</span><span class="s2">;</span></div>
    <div>   <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;a href="?tri='</span><span class="s2">.</span><span class="s1">\$nomChamp</span><span class="s2">.</span><span class="s3">'&amp;amp;ordre=ASC"&gt;'</span><span class="s2">;</span></div>
    <div>   <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s1">\$etiquettes</span><span class="s2">[</span><span class="s1">\$nomChamp</span><span class="s2">];</span></div>
    <div>   <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/a&gt;'</span><span class="s2">;</span></div>
    <div>   <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/th&gt;'</span><span class="s2">;</span></div>
    <div>}</div>
FIN
	],
	15=>[
		'enonce'=>'Faites afficher un petit triangle (dans le dossier <code>images</code>) à côté de l\'étiquette pour indiquer l\'ordre de tri.',
		'code'=> <<<FIN
    <div>   <span class="s2">if (</span><span class="s1">\$tri</span> <span class="s2">===</span> <span class="s1">\$nomChamp</span><span class="s2">) {</span></div>
    <div>      <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;img src="images/ASC.svg" alt="Tri par '</span><span class="s2">.</span><span class="s1">\$tri</span><span class="s2">.</span><span class="s3">'" /&gt;'</span><span class="s2">;</span></div>
    <div>   }</div>
FIN
	],
	16=>[
		'enonce'=>'Faites en sorte que, si l\'on clique sur l\'étiquette d\'une colonne déjà triée, on la trie en ordre décroissant. Le triangle doit changer pour indiquer l\'ordre de tri.',
		'code'=> <<<FIN
    <div>   <span class="s2">if (</span><span class="s1">\$tri</span> <span class="s2">===</span> <span class="s1">\$nomChamp</span> <span class="s2">&amp;&amp;</span> <span class="s1">\$ordre</span> <span class="s2">===</span> <span class="s3">"ASC"</span><span class="s2">) {</span></div>
    <div>      <span class="s1">\$ordreChamp</span> <span class="s2">=</span> <span class="s3">"DESC"</span><span class="s2">;</span></div>
    <div>   } else {</div>
    <div>      <span class="s1">\$ordreChamp</span> <span class="s2">=</span> <span class="s3">"ASC"</span><span class="s2">;</span></div>
    <div>   }</div>
    <div>...</div>
    <div>   <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;a href="?tri='</span><span class="s2">.</span><span class="s1">\$nomChamp</span><span class="s2">.</span><span class="s3">'&amp;amp;ordre='</span><span class="s2">.</span><span class="s1">\$ordreChamp</span><span class="s2">.</span><span class="s3">'"&gt;'</span><span class="s2">;</span></div>
    <div>...</div>
    <div>   <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;img src="images/'</span><span class="s2">.</span><span class="s1">\$ordre</span><span class="s2">.</span><span class="s3">'.svg" alt="Tri par '</span><span class="s2">.</span><span class="s1">\$tri</span><span class="s2">.</span><span class="s3">'" /&gt;'</span><span class="s2">;</span></div>
FIN
	],
	17=>[
		'enonce'=>'Ajoutez la colonne <code>\'superficie\'</code>.',
		'code'=> <<<FIN
    <div>   <span class="s3">"superficie"</span><span class="s2">=&gt;</span><span class="s3">"Superficie"</span><span class="s2">,</span></div>
    <div>...</div>
    <div><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"superficie"</span><span class="s2">;</span></div>
FIN
	],
	18=>[
		'enonce'=>'Mettez les colonnes dans l\'ordre suivant : <code>nom</code>, <code>capitale</code>, <code>population</code>, <code>superficie</code>.',
		'code'=> <<<FIN
    <div><span class="s1">\$etiquettes</span> <span class="s2">= array (</span></div>
    <div> <span class="s3">"nom"</span><span class="s2">=&gt;</span><span class="s3">"Nom"</span><span class="s2">,</span></div>
    <div class="del"> <span class="s3">"population"</span><span class="s2">=&gt;</span><span class="s3">"Population"</span><span class="s2">,</span></div>
    <div> <span class="s3">"capitale"</span><span class="s2">=&gt;</span><span class="s3">"Capitale"</span><span class="s2">,</span></div>
    <div> <span class="s3">"population"</span><span class="s2">=&gt;</span><span class="s3">"Population"</span><span class="s2">,</span></div>
    <div> <span class="s3">"superficie"</span><span class="s2">=&gt;</span><span class="s3">"Superficie"</span><span class="s2">,</span></div>
    <div>);</div>
    <div><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"nom"</span><span class="s2">;</span></div>
    <div class="del"><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"population"</span><span class="s2">;</span></div>
    <div><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"capitale"</span><span class="s2">;</span></div>
    <div><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"population"</span><span class="s2">;</span></div>
    <div><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"superficie"</span><span class="s2">;</span></div>
FIN
	],
	19=>[
		'enonce'=>'Faites en sorte que la variable <code>$nomsChamps</code> soit tirée de la variable <code>$etiquette</code> à l\'aide de la fonction <code>array_keys</code>. (voir <a href="http://php.net/array_keys">php.net/array_keys</a>)',
		'code'=> <<<FIN
    <div class="del"><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"nom"</span><span class="s2">;</span></div>
    <div class="del"><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"capitale"</span><span class="s2">;</span></div>
    <div class="del"><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"population"</span><span class="s2">;</span></div>
    <div class="del"><span class="s1">\$nomsChamps</span><span class="s2">[] =</span> <span class="s3">"superficie"</span><span class="s2">;</span></div>
    <div><span class="s1">\$nomsChamps</span> <span class="s2">=</span> <span class="s1">array_keys</span><span class="s2">(</span><span class="s1">\$etiquettes</span><span class="s2">);</span></div>
FIN
	],
	20=>[
		'enonce'=>'C\'est fini!',
		'code'=> <<<FIN
    <div><span class="s1">&lt;?php</span></div>
    <div><span class="s4">// La connexion</span></div>
    <div><span class="s1">\$pdo</span> <span class="s2">= new</span> <span class="s1">PDO</span><span class="s2">(</span><span class="s3">"sqlite:monde.sqlite"</span><span class="s2">);</span></div>
    <div>&nbsp;</div>
    <div><span class="s4">// Les variables</span></div>
    <div><span class="s1">\$ordre</span> <span class="s2">=</span> <span class="s3">"ASC"</span><span class="s2">;</span></div>
    <div><span class="s2">if (isset(</span><span class="s1">\$_GET</span><span class="s2">[</span><span class="s3">'ordre'</span><span class="s2">])) {</span></div>
    <div> <span class="s1">\$ordre</span> <span class="s2">=</span> <span class="s1">\$_GET</span><span class="s2">[</span><span class="s3">'ordre'</span><span class="s2">];</span></div>
    <div>}</div>
    <div><span class="s1">\$tri</span> <span class="s2">=</span> <span class="s3">"nom"</span><span class="s2">;</span></div>
    <div><span class="s2">if (isset(</span><span class="s1">\$_GET</span><span class="s2">[</span><span class="s3">'tri'</span><span class="s2">])) {</span></div>
    <div> <span class="s1">\$tri</span> <span class="s2">=</span> <span class="s1">\$_GET</span><span class="s2">[</span><span class="s3">'tri'</span><span class="s2">];</span></div>
    <div>}</div>
    <div><span class="s1">\$ORDER</span> <span class="s2">=</span> <span class="s3">"ORDER BY</span> <span class="s1">\$tri</span> <span class="s1">\$ordre</span><span class="s3">"</span><span class="s2">;</span></div>
    <div><span class="s1">\$etiquettes</span> <span class="s2">= array (</span></div>
    <div> <span class="s3">"nom"</span><span class="s2">=&gt;</span><span class="s3">"Nom"</span><span class="s2">,</span></div>
    <div> <span class="s3">"capitale"</span><span class="s2">=&gt;</span><span class="s3">"Capitale"</span><span class="s2">,</span></div>
    <div> <span class="s3">"population"</span><span class="s2">=&gt;</span><span class="s3">"Population"</span><span class="s2">,</span></div>
    <div> <span class="s3">"superficie"</span><span class="s2">=&gt;</span><span class="s3">"Superficie"</span><span class="s2">,</span></div>
    <div>);</div>
    <div><span class="s1">\$nomsChamps</span> <span class="s2">=</span> <span class="s1">array_keys</span><span class="s2">(</span><span class="s1">\$etiquettes</span><span class="s2">);</span></div>
    <div><span class="s1">\$CHAMPS</span> <span class="s2">=</span> <span class="s1">implode</span><span class="s2">(</span><span class="s3">","</span><span class="s2">,</span> <span class="s1">\$nomsChamps</span><span class="s2">);</span></div>
    <div>&nbsp;</div>
    <div><span class="s4">// La composition du SQL</span></div>
    <div><span class="s1">\$SQL</span> <span class="s2">=</span> <span class="s3">"SELECT</span> <span class="s1">\$CHAMPS</span><span class="s3"> FROM pays</span> <span class="s1">\$ORDER</span><span class="s3">"</span><span class="s2">;</span></div>
    <div>&nbsp;</div>
    <div><span class="s4">// L'exécution de la requête</span></div>
    <div><span class="s1">\$req</span> <span class="s2">=</span> <span class="s1">\$pdo</span><span class="s2">-&gt;</span><span class="s1">query</span><span class="s2">(</span><span class="s1">\$SQL</span><span class="s2">);</span></div>
    <div>&nbsp;</div>
    <div><span class="s4">//La composition de l'affichage</span></div>
    <div><span class="s1">\$affichage</span> <span class="s2">=</span> <span class="s3">''</span><span class="s2">;</span></div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;table border="1"&gt;'</span><span class="s2">;</span></div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;thead&gt;'</span><span class="s2">;</span></div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;tr&gt;'</span><span class="s2">;</span></div>
    <div><span class="s2">foreach (</span><span class="s1">\$nomsChamps</span> <span class="s2">as</span> <span class="s1">\$nomChamp</span><span class="s2">) {</span></div>
    <div><span class="s2">    if (</span><span class="s1">\$tri</span> <span class="s2">===</span> <span class="s1">\$nomChamp</span> <span class="s2">&amp;&amp;</span> <span class="s1">\$ordre</span> <span class="s2">===</span> <span class="s3">"ASC"</span><span class="s2">) {</span></div>
    <div> <span class="s1">\$ordreChamp</span> <span class="s2">=</span> <span class="s3">"DESC"</span><span class="s2">;</span></div>
    <div> } else {</div>
    <div> <span class="s1">\$ordreChamp</span> <span class="s2">=</span> <span class="s3">"ASC"</span><span class="s2">;</span></div>
    <div> }</div>
    <div> <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;th&gt;'</span><span class="s2">;</span></div>
    <div> <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;a href="?tri='</span><span class="s2">.</span><span class="s1">\$nomChamp</span><span class="s2">.</span><span class="s3">'&amp;amp;ordre='</span><span class="s2">.</span><span class="s1">\$ordreChamp</span><span class="s2">.</span><span class="s3">'"&gt;'</span><span class="s2">;</span></div>
    <div> <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s1">\$etiquettes</span><span class="s2">[</span><span class="s1">\$nomChamp</span><span class="s2">];</span></div>
    <div> <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/a&gt;'</span><span class="s2">;</span></div>
    <div><span class="s2">    if (</span><span class="s1">\$tri</span> <span class="s2">===</span> <span class="s1">\$nomChamp</span><span class="s2">) {</span></div>
    <div> <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;img src="images/'</span><span class="s2">.</span><span class="s1">\$ordre</span><span class="s2">.</span><span class="s3">'.svg" alt="Tri par '</span><span class="s2">.</span><span class="s1">\$tri</span><span class="s2">.</span><span class="s3">'" /&gt;'</span><span class="s2">;</span></div>
    <div> }</div>
    <div> <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/th&gt;'</span><span class="s2">;</span></div>
    <div>}</div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/tr&gt;'</span><span class="s2">;</span></div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/thead&gt;'</span><span class="s2">;</span></div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;tbody&gt;'</span><span class="s2">;</span></div>
    <div><span class="s2">while ((</span><span class="s1">\$enr</span> <span class="s2">=</span> <span class="s1">\$req</span><span class="s2">-&gt;</span><span class="s1">fetch</span><span class="s2">()) !==</span> <span class="s1">false</span><span class="s2">) {</span></div>
    <div> <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;tr&gt;'</span><span class="s2">;</span></div>
    <div><span class="s2">    foreach(</span><span class="s1">\$nomsChamps</span> <span class="s2">as</span> <span class="s1">\$nomChamp</span><span class="s2">) {</span></div>
    <div> <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;td&gt;'</span><span class="s2">.</span><span class="s1">\$enr</span><span class="s2">[</span><span class="s1">\$nomChamp</span><span class="s2">].</span><span class="s3">'&lt;/td&gt;'</span><span class="s2">;</span></div>
    <div> }</div>
    <div> <span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/tr&gt;'</span><span class="s2">;</span></div>
    <div>}</div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/tbody&gt;'</span><span class="s2">;</span></div>
    <div><span class="s1">\$affichage</span> <span class="s2">.=</span> <span class="s3">'&lt;/table&gt;'</span><span class="s2">;</span></div>
    <div>&nbsp;</div>
    <div><span class="s4">// Dans le body : echo \$affichage;</span></div>
    <div><span class="s1">?&gt;</span></div>
</div>
FIN
	],
];
