<?php

/*
 * Pays.php
 */

/**
 * Description of Pays
 *
 * @author kalan
 */
class Pays {

    private $idPays;
    private $nomPays;

    public function __construct($idPays = "", $nomPays = "") {
        $this->idPays = $idPays;
        $this->nomPays = $nomPays;
    }

    public function getIdPays() {
        return $this->idPays;
    }

    public function getNomPays() {
        return $this->nomPays;
    }

    public function setIdPays($idPays): void {
        $this->idPays = $idPays;
    }

    public function setNomPays($nomPays): void {
        $this->nomPays = $nomPays;
    }

}
