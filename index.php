<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require"classes/personnage.php";
require"classes/dragon.php";
require"classes/princesse.php";
require "classes/sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Votre nom");

// Creation d'une instance de la classe dragon
$dragon = new dragon();
$dragon->setNom("");

$princesse = new princesse();

Echo $princesse->x;

Echo "<br><br>";

Echo $princesse->y;

Echo "<br><br>";

Echo $princesse->getSaved();

$sorcier = new sorcier();

Echo "<br><br>";

Echo $sorcier->x;

Echo "<br><br>";

Echo $sorcier->y;

Echo "<br><br>";

Echo $sorcier->getVie();