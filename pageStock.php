<?php
$res = @include '../../main.inc.php'; // For root directory
if (! $res)	$res = @include '../../../main.inc.php'; // For "custom" directory
if (! $res) die("Include of main fails");


$langs->load('beerresalerUS@beerresaler');

dol_include_once('beerresaler/class/beers.class.php');
dol_include_once('beerresaler/class/ventes.class.php');

$myBeers=new Beers($db);

//title
llxHeader('', 'BeerResaler');

dol_fiche_head();

 print_fiche_titre(Gestion du stock, '', null, 1);


echo "<a href='".dol_buildpath("beerresaler/beers_list.php",1)."?action=list'>Lien vers liste des bieres</a>";


dol_fiche_end();

llxFooter();
