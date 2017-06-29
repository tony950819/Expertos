<?php


class TouristicSite {
    
     //variables
    private $idSite;
    private $idTypeSite;
    private $nameSite;
    private $descriptionSite;
    private $priceSite;
    private $urlWebSite;
    private $imageSite;
    private $videoSite;
    private $classificationSite;
    
    function __construct($idSite, $idTypeSite, $nameSite, $descriptionSite, $priceSite, $urlWebSite, $imageSite, $videoSite, $classificationSite) {
        $this->idSite = $idSite;
        $this->idTypeSite = $idTypeSite;
        $this->nameSite = $nameSite;
        $this->descriptionSite = $descriptionSite;
        $this->priceSite = $priceSite;
        $this->urlWebSite = $urlWebSite;
        $this->imageSite = $imageSite;
        $this->videoSite = $videoSite;
        $this->classificationSite = $classificationSite;
    }

    function getIdSite() {
        return $this->idSite;
    }

    function getIdTypeSite() {
        return $this->idTypeSite;
    }

    function getNameSite() {
        return $this->nameSite;
    }

    function getDescriptionSite() {
        return $this->descriptionSite;
    }

    function getPriceSite() {
        return $this->priceSite;
    }

    function setPriceSite($priceSite) {
        $this->priceSite = $priceSite;
    }

    
    function getUrlWebSite() {
        return $this->urlWebSite;
    }

    function getImageSite() {
        return $this->imageSite;
    }

    function getVideoSite() {
        return $this->videoSite;
    }

    function getClassificationSite() {
        return $this->classificationSite;
    }

    function setIdSite($idSite) {
        $this->idSite = $idSite;
    }

    function setIdTypeSite($idTypeSite) {
        $this->idTypeSite = $idTypeSite;
    }

    function setNameSite($nameSite) {
        $this->nameSite = $nameSite;
    }

    function setDescriptionSite($descriptionSite) {
        $this->descriptionSite = $descriptionSite;
    }

    function setUrlWebSite($urlWebSite) {
        $this->urlWebSite = $urlWebSite;
    }

    function setImageSite($imageSite) {
        $this->imageSite = $imageSite;
    }

    function setVideoSite($videoSite) {
        $this->videoSite = $videoSite;
    }

    function setClassificationSite($classificationSite) {
        $this->classificationSite = $classificationSite;
    }


}//end class
