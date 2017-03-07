<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DomicilioCuentaDTO
 *
 * @author Josué Francisco
 */
final class DomicilioCuentaDTO {

    private $cuentaTipoDocumento;
    private $cuentaNumDocumento;
    private $direccion;
    private $telefono;
    private $barrio;
    private $localidad;
    private $correoPostal;

    public function __construct() {
        
    }

    public function getCuentaTipoDocumento() {
        return $this->cuentaTipoDocumento;
    }

    public function getCuentaNumDocumento() {
        return $this->cuentaNumDocumento;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getBarrio() {
        return $this->barrio;
    }

    public function getLocalidad() {
        return $this->localidad;
    }

    public function getCorreoPostal() {
        return $this->correoPostal;
    }

    public function setCuentaTipoDocumento($cuentaTipoDocumento) {
        $this->cuentaTipoDocumento = (string) $cuentaTipoDocumento;
    }

    public function setCuentaNumDocumento($cuentaNumDocumento) {
        $this->cuentaNumDocumento = (string) $cuentaNumDocumento;
    }

    public function setDireccion($direccion) {
        $this->direccion = (string) $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = (string) $telefono;
    }

    public function setBarrio($barrio) {
        $this->barrio = (string) $barrio;
    }

    public function setLocalidad($localidad) {
        $this->localidad = (string) $localidad;
    }

    public function setCorreoPostal($correoPostal) {
        $this->correoPostal = (string) $correoPostal;
    }

}
