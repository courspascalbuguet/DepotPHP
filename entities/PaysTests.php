<?php

/* 
 * PaysTests.php
 */

require_once 'Pays.php';


$fr = new Pays("FR", "France");

echo $fr->getNomPays();

?>
