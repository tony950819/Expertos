<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Administrator {
    
    //variables
    private $idAdministrator;
    private $nameAdministrator;
    private $emailAdministrator;
    private $passwordAdministrator;
    
    
    function Administrator($idAdministrator, $nameAdministrator, $emailAdministrator, $passwordAdministrator) {
        $this->idAdministrator = $idAdministrator;
        $this->nameAdministrator = $nameAdministrator;
        $this->emailAdministrator = $emailAdministrator;
        $this->passwordAdministrator = $passwordAdministrator;
    }

    /************************SET Y GET************************************************/
    function getIdAdministrator() {
        return $this->idAdministrator;
    }

    function getNameAdministrator() {
        return $this->nameAdministrator;
    }

    function getEmailAdministrator() {
        return $this->emailAdministrator;
    }

    function getPasswordAdministrator() {
        return $this->passwordAdministrator;
    }

    function setIdAdministrator($idAdministrator) {
        $this->idAdministrator = $idAdministrator;
    }

    function setNameAdministrator($nameAdministrator) {
        $this->nameAdministrator = $nameAdministrator;
    }

    function setEmailAdministrator($emailAdministrator) {
        $this->emailAdministrator = $emailAdministrator;
    }

    function setPasswordAdministrator($passwordAdministrator) {
        $this->passwordAdministrator = $passwordAdministrator;
    }




}//end class