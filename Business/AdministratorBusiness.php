<?php

include '../Data/AdministratorData.php';

class AdministratorBusiness {

    /*variable para BD*/
    private $adminData;
    
    //constructor
    function AdministratorBusiness() {
        $this->adminData = new AdministratorData();
    }//end 

    //metodo para obtener un administrador
    function getAdmin($email){
        //$email =  $_POST['email'];    
        return json_encode($this->adminData->getAdmin($email));
    }//end getAdmin
    
}//end class

//accion que se va a realizar
/*se obtiene la acción a realizar (insert,update,select,delete)*/
//$action = $_POST['action'];
//$adminBusiness = new AdministratorBusiness();
//echo "holaaaaaaaaaaa";
////if ($action == "getAdmin") {
//    
//    /*se crea la instancia y se llama al método*/
//    $adminBusiness->getAdmin();
////}