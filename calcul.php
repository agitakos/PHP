<?php

$montant = 3778;
$aliasMontant = $montant;
$b500 = 0;
$b100 = 0;
$b10 = 0;
$b1 =  0;
$nb = 500;

while ($montant >= $nb) {
	$montant = $montant - $nb;
	$b500++;
}
$nb = 100;
while ($montant >= $nb) {
	$montant = $montant - $nb;
	$b100++;
}

$nb = 10;
while ($montant >= $nb) {
	$montant = $montant - $nb;
	$b10++;
}

$nb = 1;
while ($montant >= $nb) {
	$montant = $montant - $nb;
	$b1++;
}

echo '<h3>Sur une somme de ' . $aliasMontant . ', 
on peut découper en billets bitcoins de :</h3>' .
$b500 . 'billets de 500 bitcoins.<br />' .
$b100 . 'billets de 100 bitcoins.<br />' .
$b10 . 'billets de 10 bitcoins.<br />' .
$b1 . 'billets de 1 bitcoins.<br />';
$var500 = $b500 * 500;
$var100 = $b100 * 100;
$var10 = $b10 * 10;
$var1 = $b1 * 1;
$sommeTotale = $var500 + $var100 + $var10 + $var1;

echo '<h3>La preuve</h3>' .
'La somme totale '. $aliasMontant .' de ces billets est de ' . $sommeTotale;