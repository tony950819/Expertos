<?php

include '../Domain/Administrator.php';
include 'DBConnection.php';

class AdministratorData {
    
    //constructor
    function AdministratorData() {
    }//end constructor

    
    /*método para obtener la información de un administrador*/
    function getAdmin($email){
        
        $conn = new DBConnection();
        if ($conn->connect()) {
            $query = "Select * from administrador where emailAdministrador = '" . $email . "'";
          //  $query = "Select * from administrador where emailAdministrador = 'karibl36@gmail.com'";
            $result = mysqli_query($conn->getCon(), $query);
            
            $row=mysqli_fetch_array($result);
            $currentAdmin = new Administrator($row['idAdministrador'], $row['nombreAdministrador'], 
                    $row['emailAdministrador'], $row['contrasenaAdministrador']);
            return $currentAdmin;   
        }else{
            echo "Error con la BD";
        }
    }//end getAdmin
}//end class
