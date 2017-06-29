<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../Data/TypeSiteData.php';

class TypeSiteBusiness {

    private $typeSiteData;
    
    function TypeSiteBusiness() {
        $this->typeSiteData = new TypeSiteData();
    }//end
    
    //metodo para obtener todos los tipos de sitios
    function getAllTypeSites(){
        return $this->typeSiteData->getAllTypes();
    }//end getAllTypeSites

    
    
}//end class
