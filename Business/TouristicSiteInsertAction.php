<?php

include '../Business/TouristicSiteBusiness.php';


//validar la info
if(strlen($_GET['txtName']) == 0 || strlen($_GET['txtDescription']) == 0){
    //devolver con error
}else{
    //obtener la info del nuevo sitio
    $type = $_GET['selType'];
    $name = $_GET['txtName'];
    $description = $_GET['txtDescription'];
    $url = $_GET['txtURL'];
    $image = $_GET['txtImagen'];
    $video = $_GET['txtVideo'];
    $price = $_GET['txtPrice'];
    
    $siteBusiness = new TouristicSiteBusiness();
    $site = new TouristicSite(0, $type, $name, $description, $price, $url, $image, $video, 'A');
    
    //calcular probabilidad
    $probA = calculateClass($site, 'A');
    $probB = calculateClass($site, 'B');
    $probC = calculateClass($site, 'C');
    $probD = calculateClass($site, 'D');
    
    if($probA > $probB && $probA > $probC && $probA > $probD){
            $site->setClassificationSite('A');
    }else if($probB > $probA && $probB > $probC && $probB > $probD ){
             $site->setClassificationSite('B');
        }else if($probC > $probA && $probC > $probB && $probC > $probD ){
            $site->setClassificationSite('C');
        }else{
            $site->setClassificationSite('D');
        }
    $siteBusiness->insertTouristicSite($site);

    header("location: ../View/showTouristicSites.php");
            
}//end if/else

function calculateClass($site, $class){
    
    //variables de la ecuacion
        $totalInstanciasN = 0;//cantidad de instancias que tienen el tipo que recibe por parametros
        $probAtributosP = 1/3; //se divide 1 entre 3, donde 3 es el # posibilidades (# de tipos)
        $cantidadAtributosM = 2; //2 es la cantidad de atributos a tomar en cuenta
        
        //instancia de la clase TouristicSiteBusiness
        $siteBusiness = new TouristicSiteBusiness();
        
        //obtener todos los registros de la BD
        $registros = $siteBusiness->getSitesByType($site->getIdTypeSite());
        
        /**Calcular las variables de la ecuacion***/
        //calcular cuantos registros tienen la clase que recibe por parámetros
        foreach ($registros as $registroActual) {
            if(strcmp($registroActual->getClassificationSite(), $class) == 0){
                $totalInstanciasN+=1;
            }//end if
        }//end foreach
        
        //calcular variables de la ecuacion
        //resultado de dividir el total de registros que tienen el tipo corresp. entre el total de registros
        $probTipo = $totalInstanciasN / count($registros); 
        $totalA = 0; $totalB = 0; 
        //recorrer los registros para calcular la cantidad de veces que se tiene 
        //cada atributo con el estilo*/
        foreach ($registros as $registroActual) {
            if($registroActual->getIdTypeSite() == $site->getIdTypeSite()){
                $totalA+=1;
            }//
            if($registroActual->getPriceSite() == $site->getPriceSite()){
                $totalB+=1;
            }//
            
        }//end foreach
        
        //se aplica la ecuacion para cada atributo
        $resulA = ($totalA + ($cantidadAtributosM*$probAtributosP)) / ($totalInstanciasN+$cantidadAtributosM);
        $resulB = ($totalB + ($cantidadAtributosM*$probAtributosP)) / ($totalInstanciasN+$cantidadAtributosM);
        
        //se multiplican los resultados
        $resulProb = ($resulA*$resulB);
        
        //se multiplica el resultado por la probabilidad del tipo de profesor
        $resultFinal = $resulProb * $probTipo;
        
        return $resultFinal;
}//end calculateClass
