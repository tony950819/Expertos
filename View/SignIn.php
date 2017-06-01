<!DOCTYPE HTML>
<html>

<head>
  <title>TurisTico.com</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="../style/style.css" title="style" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" >
</head>

<?php include_once '../Base/header.php';?>

<div id="site_content">
    <center>
        <h1>Registrar nueva Cuenta</h1>
    
        <form method="post" action="#" id="search_form">
            <div class="form_settings">
                <p><Nombre: <input class="contact" type="text" name="txtName" id="txtName" value="" /></p>
                <p>Email:  <input class="contact" type="text" name="txtEmail" id="txtEmail" value="" /></p>
                <p>Tipo de Turísta: 
                    <select class="contact" type="text" name="selType" id="selType" value="" >
                        <option value="0">Turista 1</option>
                        <option value="1">Turista 2</option>
                    </select>
                </p>
                <p>Contraseña:  <input class="contact" type="password" name="txtPassword" id="txtPassword" value="" /></p>
                <p>Confirmar Contraseña:  <input class="contact" type="text" name="txtConfPasss" id="txtConfPasss" value="" /></p>
                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Crear Cuenta" /></p>
            </div>
        
        </form>
    </center>
    
    
</div>  
<?php include_once '../Base/footer.php'; ?>
  
</body>
</html>
