<?php

include '../Domain/TouristicSite.php';
include '../Domain/TypeSite.php';
include 'DBConnection.php';

class TouristicSiteData {
    
    function TouristicSiteData() {
    }//end class

    //metodo para obtener todos los sitios
    function getAllSites(){
        
        $conn = new DBConnection();
        if ($conn->connect()) {
            $query = "Select * from touristicsite, typesite where touristicsite.idtypesite = typesite.idtypeSite";
            $result = mysqli_query($conn->getCon(), $query);
            $array=[];
            //en cada iteracion guarde en row
            while($row=mysqli_fetch_array($result)){
               $currentSite = new TouristicSite($row['idSite'], new TypeSite($row['idTypeSite'], 
                              $row['nameTypeSite'], $row['descriptionTypeSite']), 
                              $row['nameSite'], $row['descriptionSite'], $row['priceSite'], 
                              $row['urlWebSite'], $row['imageSite'], $row['videoSite'], 
                              $row['classificationSite']);
                array_push($array, $currentSite);
            }//end while

            return $array;   
        }else{
            echo "Error con la BD";
        }
    }//end getAllSites
    
    //obtener sitio por id
    function getSiteByID($idSite){
        $conn = new DBConnection();
        if ($conn->connect()) {
            $query = "Select * from touristicsite, typesite where touristicsite.idtypesite = typesite.idtypeSite"
                    . " AND touristicsite.idSite = " . $idSite;
            $result = mysqli_query($conn->getCon(), $query);
            //en cada iteracion guarde en row
            $row=mysqli_fetch_array($result);
               $currentSite = new TouristicSite($row['idSite'], new TypeSite($row['idTypeSite'], 
                              $row['nameTypeSite'], $row['descriptionTypeSite']), 
                              $row['nameSite'], $row['descriptionSite'], $row['priceSite'], 
                              $row['urlWebSite'], $row['imageSite'], $row['videoSite'], 
                              $row['classificationSite']);

            return $currentSite;   
        }else{
            echo "Error con la BD";
        }
    }//end getSiteByID
    
    //obtener los sitios por tipo de sitio
    function getSitesByType($idType){
        $conn = new DBConnection();
        if ($conn->connect()) {
            $query = "Select * from touristicsite, typesite where touristicsite.idtypesite = typesite.idtypeSite"
                    . " AND touristicsite.idtypesite = " . $idType;
            $result = mysqli_query($conn->getCon(), $query);
            $array=[];
            //en cada iteracion guarde en row
            while($row=mysqli_fetch_array($result)){
               $currentSite = new TouristicSite($row['idSite'], new TypeSite($row['idTypeSite'], 
                              $row['nameTypeSite'], $row['descriptionTypeSite']), 
                              $row['nameSite'], $row['descriptionSite'], $row['priceSite'], 
                              $row['urlWebSite'], $row['imageSite'], $row['videoSite'], 
                              $row['classificationSite']);
                array_push($array, $currentSite);
            }//end while

            return $array;   
        }else{
            echo "Error con la BD";
        }
    }//end getSitesByType
    
    //metodo para insertar un sitio Turistico
    function insertTouristicSite($site){
        
        $conn = new DBConnection();
        if ($conn->connect()) {
            $query = "insert into touristicsite (idTypeSite,nameSite,descriptionSite, "
                    . "priceSite, urlWebSite, imageSite, videoSite, classificationSite) "
                    . "values (". $site->getIdTypeSite().","
                    . "'". $site->getNameSite() . "','". $site->getDescriptionSite() ."',"
                    . "". $site->getPriceSite().",'" . $site->getUrlWebSite() ."',"
                    . "'" . $site->getImageSite() ."','" . $site->getVideoSite() ."',"
                    . "'" . $site->getClassificationSite() . "');";
            $result = mysqli_query($conn->getCon(), $query);
           

            return $result;   
        }else{
            echo "Error con la BD";
        }
       
    }//end insertTouristicSite
   
  
    //metodo para eliminar un sitio
    function deleteSite($id){
         $conn = new DBConnection();
        if ($conn->connect()) {
            $query = "Delete from touristicsite where idSite = " . $id;
            $result = mysqli_query($conn->getCon(), $query);
            
            return $result;
        }else{
            echo "Error con la BD";
        }
    }//end deleteSite
}//end class
