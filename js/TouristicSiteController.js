/*función que retorna los sitios turísiticos y llena una tabla dinamicamente*/
function getAllSites(){
    
    //document.getElementById("tbSites").fadeOut('fast');
    $("#tbSites").fadeOut('fast');
        
    /*se le agrega el encabezado a la tabla*/
    var innerHtml=("<thead><tr><th><b>Sitio Turistico</th><th><b>Descripcion</th><th><b>Editar</th><th><b>Eliminar</th></tr></thead>");
    $.post("../Business/TouristicSiteBusiness.php", {
        action: "getAllSites"
    },function(data){
        alert(data);
    });
   
        for (var i=1;i<=4;i++){
                innerHtml+=(
        	"<tr><td>"+"Sitio Turístico " + i +"</td>"+
                "<td>"+ "Descripción Sitio Turístico " + i +"</td>"+
                "<td><a href='javascript:getArticlePriceHistory("+i+")'>Editar</a></td>"+
                "<td><a href='javascript:loadArticle("+i+")'>Eliminar</a></td></tbody>"
                );
        }//end for

       
       $("#tbSites").fadeIn('slow');
       $("#tbSites").html(innerHtml);
    
    
        
       
}//end getAllSites

//funcion para cargar la informacion necesaria a la pagina de insertar un nuevo Sitio turistico
function loadInformation(){
    
    getTypes();
    getClassification();
}//end loadInformation

//funcion para obtener los tipos de sitio turístico que existen
function getTypes(){
    var innerHtml = "<option value=0 >Seleccione un Tipo de Sitio</option>";
        
    for (var i=1;i<=4;i++){
         innerHtml += (

         "<option value=" +i + "> Tipo " + i + "</option>" 
          );
      }//end for 
     $("#selType").html(innerHtml);
   
}//end getTypes

//funcion para obtener la clasificación de los  sitios turísticos que existen
function getClassification(){
    var innerHtml = "<option value=0 >Seleccione una Clasificación</option>";
        
    for (var i=1;i<=4;i++){
         innerHtml += (

         "<option value=" +i + "> Clasificación " + i + "</option>" 
          );
      }//end for 
     $("#selClassification").html(innerHtml);
   
}//end getTypes
