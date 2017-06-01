<!DOCTYPE HTML>
<html>

    <head>
        <title>TurisTico.com - Insertar</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="../../../style/style.css" title="style" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="../../../js/adminController.js"></script>
    </head>

    <body onload="loadInformation();">
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
                <h1>Nuevo Sitio Turístico</h1> 
                <center>
                    <div class="wrap">
                        <form action="#" method="post">
                            <div class="form_settings">
                                <p><span>Nombre: </span><input class="contact" type="text" name="txtname" id="txtname" value="" /></p>
                                <p><span>Tipo de Sitio: </span><input class="contact" type="text" name="your_email" value="" /></p>
                                <p><span>Descripción</span><textarea class="contact textarea" rows="5" cols="30" name="txtDescription" id="txtDescription"></textarea></p>
                                <p><span>Tipo de Sitio: </span>
                                <div class="styled-select green rounded">

                                    <select id="selType" name="selType">

                                    </select>
                                </div>
                                </p>
                                <p><span>Sitio Web: </span><input class="contact" type="text" name="txtURL" id="txtURL" value="" /></p>
                                <p>
                                    <span>Clasificación: </span>
                                <div class="styled-select green rounded">

                                    <select id="selClassification" name="selClassification">

                                    </select>
                                </div>
                                </p>


                                <p><span>Imágen: </span><input class="contact" type="file" name="your_email" value="" /></p>
                                <p>
                                    <input class="submit" type="submit" name="btnInsert" id="btnInsert" value="Crear" />
                                    <input class="submit" style="text-align: center" type="submit" name="btnCancel" id="btnCancel" value="Cancelar" onclick=""/>
                                </p>

                            </div>
                        </form>
                        <p>

                        </p>

                    </div>
                </center>


            </div>
            <?php include_once '../../../Base/footer.php'; ?>
    </body>
</html>