<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Domain/TypeSite.php';
include 'DBConnection.php';
class TypeSiteData {
   
    function TypeSiteData() {
    }//end 
    
    
    //método para traer todos los tipos de sitios
    function getAllTypes(){
        $conn = new DBConnection();
        if ($conn->connect()) {
            $query = "Select * from typesite";
            $result = mysqli_query($conn->getCon(), $query);
            $array=[];
            //en cada iteracion guarde en row
            while($row=mysqli_fetch_array($result)){
               $currentType = new TypeSite($row['idTypeSite'], 
                              $row['nameTypeSite'], $row['descriptionTypeSite']);
                       
                array_push($array, $currentType);
            }//end while

            return $array;   
        }else{
            echo "Error con la BD";
        }
    }//end getAllTypes

}//end class
