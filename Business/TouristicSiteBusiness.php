<?php

include_once '../Data/TouristicSiteData.php';

class TouristicSiteBusiness {
    
    private $touristicSiteData;
    
    function TouristicSiteBusiness() {
        $this->touristicSiteData = new TouristicSiteData();
    }

    //traer todos los sitios
    public function getAllSites(){
        return $this->touristicSiteData->getAllSites();
    }//end 
    
    //eliminar un sitio 
    public function deleteSite($id){
        return $this->touristicSiteData->deleteSite($id);
    }//end deleteSite
    
    //insertar un sitio
    function insertTouristicSite($site){
        return $this->touristicSiteData->insertTouristicSite($site);
    }
    
     function getSitesByType($idType){
         return $this->touristicSiteData->getSitesByType($idType);
     }
     
     function getSiteByID($idSite){
         return $this->touristicSiteData->getSiteByID($idSite);
     }
}//end TouristicSiteBusiness

