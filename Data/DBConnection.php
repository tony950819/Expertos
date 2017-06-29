<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class DBConnection {
    
    //constructor
    function DBConnection() {
    }//end constructor

    
    //metodo para conectar a la BD
    function connect(){
        //if (!($con = @mysqli_connect("localhost", "id1792003_karinalb", "tareaKarina"))) {
        if(!($con = @mysqli_connect("localhost", "root"))){
            print_r("Error al conectar a la base de datos");
            exit();
        }
        /* selecciona la base de datos a conectar */
        if (!@mysqli_select_db($con,"dbproyectoweb")) {
            echo "Error al seleccionar la base de datos";
            exit();
        }

        if (!$con->set_charset("utf8")) {
            printf("Error loading character set utf8: %s\n", $mysqli->error);
            exit();
        }
        $this->conexion = $con;
        return true;
    }//end connect
    
     /* metodo para obtener la conexion a la base de dadtos */
    function getCon() {
        return $this->conexion;
    }
}//end class
