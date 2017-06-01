<!DOCTYPE HTML>
<html>

    <head>
        <title>TurisTico.com - Perfil</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="../../style/style.css" title="style" />
    </head>

   <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="../View/index.php">Turis<span class="logo_colour">Tico.com</span></a></h1>
          <h2>Administración del Sitio Web</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="../Administrator/indexAdmin.php">Home</a></li>
          <li><a href="TouristicSite/showTouristicSites.php">Sitios Turísticos</a></li>
          <li><a href="TypeTouristicSite/showTypes.php">Tipos de Sitios</a></li>
          <li><a href="Classification/showClassification.php">Clasificación</a></li>
          <li><a href="../Administrator/profileAdmin.php">Perfil</a></li>
          <li><a href="../Administrator/logInAdmin.php">Log out</a></li>
        </ul>
      </div>
    </div>

    <div id="site_content">
        <h1>Perfil de Administrador</h1> 
        <center>
            <div class="wrap2">
                <form action="#" method="post">
                    <div class="form_settings">
                        <p><span>Nombre: </span><input class="contact" type="text" name="txtname" id="txtname" value="" /></p>
                        <p><span>Email: </span><input class="contact" type="text" name="txtEmail" id="txtEmail" value="" /></p>
                        <p><span>Contraseña: </span><input class="contact" type="password" name="txtPassword" value="" /></p>
                        <p>
                            <input class="submit" type="submit" name="btnUpdate" id="btnUpdate" value="Guardar" />
                            <input class="submit" style="text-align: center" type="submit" name="btnCancel" id="btnCancel" value="Cancelar" onclick=""/>
                        </p>
                        
                        
                    </div>
                </form>
                <p>

                </p>

            </div>
        </center>


    </div>
    <?php include_once '../../Base/footer.php'; ?>
</body>
</html>