<!DOCTYPE HTML>
<html>

    <head>
        <title>TurisTico.com - Mantenimiento</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="../style/style.css" title="style" />
        
        <?php        
        include '../Business/TouristicSiteBusiness.php';
       ?>
    </head>
    <body>
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
          <li class="selected"><a href="indexAdmin.php">Home</a></li>
          <li><a href="showTouristicSites.php">Sitios Turísticos</a></li>
          <li><a href="showTypes.php">Tipos de Sitios</a></li>
          <li><a href="profileAdmin.php">Perfil</a></li>
          <li><a href="logInAdmin.php">Log out</a></li>
        </ul>
      </div>
    </div>

    <div id="site_content">
        <h1>Detalles del Sitio Turístico</h1>
       
        <div class="wrap">
            <center>
                <form action="../Business/TouristicSiteInsertAction.php" method="get">
                <div class="form_settings">
                    <p><span>Nombre: <?php echo $_GET['nameSite'];?></span></p>
                    <p><span>Descripción: <?php echo  $_GET['description'];?></span></p>
                    <p><span>Tipo de Sitio: <?php echo $_GET['typeSite'];?></span></p>
                    <p><span>Sitio Web: </span> <a href="<?php echo $_GET['urlSite'];?>"> <?php echo $_GET['urlSite'];?></a>
                    <p><span>Precio: <?php echo $_GET['priceSite'];?></span></p>
                    <p><span>Imágen: <?php echo $_GET['imageSite'];?></span></p>
                    <p><span>Link de video: </span> <a href="<?php echo $_GET['videoSite'];?>"> <?php echo $_GET['videoSite'];?></a> </p>
                    <p><span>Classificaction: <?php echo $_GET['classSite'];?></span></p>
                    <p>
                        <input class="submit" type="submit" name="btnInsert" id="btnInsert" value="Crear" />
                        <input class="submit" style="text-align: center" type="submit" name="btnCancel" id="btnCancel" value="Cancelar" onclick=""/>
                    </p>

                </div>
            </form>
            </center>
            
            <p>

            </p>

        </div>
         
    </div>
    <?php include_once '../Base/footer.php'; ?>
        
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
         <script src="../../../js/TouristicSiteController.js"></script>
         <script src="../../../js/jquery-3.1.1.js"></script>
</body>
</html>