/* 
 Esta clase controla los eventos del Administrador
 */

/*función para verificar los credenciales del Administrador*/
function logInAdmin(){
    
    //capturar la información del administrador
    var email = $("#txtEmail").val();
    var password = $("#txtPassword").val();
    alert(password);
    //validar información 
    $.post("../Business/AdministratorBusiness.php",{
        action: "getAdmin",
        email:email
    },function (data){
        alert(data);
        
    });
    window.open("../Administrator/indexAdmin.php");
}//end logInAdmin

