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
        <h1>Sitios Turísticos</h1>
        <a href="insertTouristicSite.php">Crear nuevo </a>
        
        <table id="tbSites" style="width:100%; border-spacing:0;">
            <tr><th><b>Sitio Turistico</th><th><b>Descripcion</th><th><b>Mostrar</th><th><b>Eliminar</th></tr>
       <?php  
                                //traer todos los parques nacionales de la BD
                                $siteBusiness = new TouristicSiteBusiness();
                                
                                $sites = $siteBusiness->getAllSites();
                                
                                foreach ($sites as $currentSite) {
                            ?> 
        <tr>
            
            <td><?php echo $currentSite->getNameSite() ?> </td>
            <td><?php echo $currentSite->getDescriptionSite() ?></td>
            <td><a href="<?php echo "../Business/ShowTouristicSiteAction.php?id=" . $currentSite->getIdSite() ?>">Mostrar</a></td>
                <td><a href="<?php echo "../Business/ToristicSiteDeleteAction.php?id=" . $currentSite->getIdSite() ?>">Eliminar</a></td>
         <?php
                                }//end for      
        
                            ?>   
        </tbody>
         
        
        
        </table> 
       
    </div>
    <?php include_once '../Base/footer.php'; ?>
        
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
         <script src="../../../js/TouristicSiteController.js"></script>
         <script src="../../../js/jquery-3.1.1.js"></script>
</body>
</html>