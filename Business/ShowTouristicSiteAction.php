<?php

include '../Business/TouristicSiteBusiness.php';


$id = $_GET['id'];



$siteBusiness = new TouristicSiteBusiness();

$site = $siteBusiness->getSiteByID($id);


header("location: ../View/showTouristicSiteDetails.php?idSite=".
        $site->getIdSite() . "&typeSite=" . 
        $site->getIdTypeSite()->getNameType() . "&nameSite=" . 
        $site->getNameSite() . "&description=" . 
        $site->getDescriptionSite() . "&priceSite=" .
        $site->getPriceSite() . "&urlSite=" . 
        $site->getUrlWebSite() . "&imageSite=" .
        $site->getImageSite() .  "&videoSite=" . 
        $site->getVideoSite() .  "&classSite=" .
        $site->getClassificationSite());

