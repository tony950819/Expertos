<!DOCTYPE HTML>
<html>

    <head>
        <title>TurisTico.com - Mantenimiento</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="../../../style/style.css" title="style" />
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="../../../js/adminController.js"></script>
    </head>
    <body onload="getAllSites();">
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
                        <li class="selected"><a href="../indexAdmin.php">Home</a></li>
                        <li><a href="../TouristicSite/showTouristicSites.php">Sitios Turísticos</a></li>
                        <li><a href="../TypeTouristicSite/showTypes.php">Tipos de Sitios</a></li>
                        <li><a href="../Classification/showClassification.php">Clasificación</a></li>
                        <li><a href="../profileAdmin.php">Perfil</a></li>
                        <li><a href="../logInAdmin.php">Log out</a></li>
                    </ul>
                </div>
            </div>

    <div id="site_content">
        <h1>Tipos de Sitios Turísticos</h1>
       
        <table id="tbSites" style="width:100%; border-spacing:0;">
         
        </table> 
        <a href="../TypeTouristicSite/insertType.php">Crear nuevo </a>
    </div>
    <?php include_once '../../../Base/footer.php'; ?>
</body>
</html>