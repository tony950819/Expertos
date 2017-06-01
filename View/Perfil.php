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

<body>
<?php include_once '../Base/header.php';?>


<div id="site_content">
    <center>
        <h1>Actualizar perfil</h1>
    
        <form method="post" action="#" id="search_form">
            <div class="form-group">
                <p>Nombre: <input class="contact" type="text" name="txtName" id="txtName" value="Antony" /></p>
                <p>Email:  <input class="contact" type="text" name="txtEmail" id="txtEmail" value="tony950819@gmail.com" /></p>
                <p>Tipo de Turísta: 
                    <select class="contact" type="text" name="selType" id="selType" value="" >
                        <option value="0">Turista 1</option>
                        <option value="1">Turista 2</option>
                    </select>
                </p>
                <p>Contraseña:  <input class="contact" type="password" name="txtPassword" id="txtPassword" value="aaaaaa" /></p>
                <p>Confirmar Contraseña:  <input class="contact" type="password" name="txtConfPasss" id="txtConfPasss" value="aaaaaa" /></p>
                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Crear Cuenta" /></p>
            </div>
        
        </form>
    </center>
    
    
</div>  
<?php include_once '../Base/footer.php'; ?>
    
    
  
</body>
</html>

