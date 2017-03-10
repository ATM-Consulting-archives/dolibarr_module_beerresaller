<?php
$res = @include '../../main.inc.php'; // For root directory
if (! $res)	$res = @include '../../../main.inc.php'; // For "custom" directory
if (! $res) die("Include of main fails");


$langs->load('beerresalerUS@beerresaler');

dol_include_once('beerresaler/class/beers.class.php');
dol_include_once('beerresaler/class/ventes.class.php');

$myBeers=new Beers($db);


// foreach( $myBeers->fetchAll() as $line ) {
//	$html .= implode(' ', array( $line->name , $line->contenance , " cl " , $line->prix , "<br/>") ); 
// }

// début génération html
llxHeader('', 'BeerResaler');

dol_fiche_head();

 print_fiche_titre(BeerResaler, '', null, 1);

/*
$myBeers->fetchAll();

echo '<pre>';

// var_dump($myBeers);

*/

echo "<a href='".dol_buildpath("beerresaler/beers_list.php",1)."?action=list'>Lien vers liste des bieres</a>";


dol_fiche_end();

llxFooter();
