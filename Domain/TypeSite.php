<?php


class TypeSite {
    
    //variables
    private $idType;
    private $nameType;
    private $descriptionType;
    
    function TypeSite($idType, $nameType, $descriptionType) {
        $this->idType = $idType;
        $this->nameType = $nameType;
        $this->descriptionType = $descriptionType;
    }

    function getIdType() {
        return $this->idType;
    }

    function getNameType() {
        return $this->nameType;
    }

    function getDescriptionType() {
        return $this->descriptionType;
    }

    function setIdType($idType) {
        $this->idType = $idType;
    }

    function setNameType($nameType) {
        $this->nameType = $nameType;
    }

    function setDescriptionType($descriptionType) {
        $this->descriptionType = $descriptionType;
    }


}//end class
