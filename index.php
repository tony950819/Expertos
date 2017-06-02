<!DOCTYPE HTML>
<html>

    <head>
        <title>TurisTico.com</title>
        <meta name="description" content="website description" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        
        <style>
            .contenedor-per{
                margin-bottom: 100px;
            }
            
            .img-per{
                width: 100%;
            }
            
            .carr-top{
                margin-top: 2.5%;
            }
        </style>
    </head>

    <body>
    <div id="main">
    <div id="header">
        <div id="logo">
            <div id="logo_text">
                <!-- class="logo_colour", allows you to change the colour of the text -->
                <h1><a href="index.php">Turis<span class="logo_colour">Tico.com</span></a></h1>
                <h2>Recomendaciones de Sitios Turísticos</h2>
            </div>
        </div>
        <div id="menubar">
            <ul id="menu">
                <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                <li class="selected"><a href="index.php">Home</a></li>
                <li><a href="View/Recomendaciones.php">Recomendaciones</a></li>
                <li><a href="View/Perfil.php">Perfil</a></li>
                <li><a href="View/Contact.php">Contáctenos</a></li>
            </ul>
        </div>
    </div>
</div>

    
    <!-- Texto a la izquierda -->
    <div class="col-md-4">
        <div class="text-center">
            <h1>Su sitio de recomendaiones</h1>
            <p>Nos caracterizamos por ser una empresa dedicada a la comercialización de sitios
                turísticos, contamos con 20 años de brindarle un servicio de calidad.</p>
        </div>
    </div>
    
    <div class="col-md-4 carr-top">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/machu.jpg" class="img-responsive img-per" alt="Chicago">
                </div>

                <div class="item">
                    <img src="images/bonito.jpg" class="img-responsive img-per" alt="Chicago">
                </div>

                <div class="item">
                    <img src="images/bonita2.jpg" class="img-responsive img-per" alt="Chicago">
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="col-md-4 contenedor-per">
        <!-- insert your sidebar items here -->
        <form method="post" action="#" id="search_form">
            <h3>Log in</h3>
            <p>Usuario: 
                <input type="text" class="form-control" name="txtUser" id="txtUser"/>
            </p>
            <p>Contraseña: 
                <input type="password"  class="form-control" name="txtPassword" id="txtPassword"/>
            </p>
            <p> 
                <input class="btn btn-default" type="submit" name="btnLogin" value="Log in"/>
                <a class="btn btn-success" href="View/SignIn.php">Registrarme</a>
            </p>
        </form>

    </div>
    
 <?php include_once 'Base/footer.php'; ?>

</body>
</html>
