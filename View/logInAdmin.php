<!DOCTYPE HTML>
<html>

<head>
  <title>TurisTico.com</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="../style/style.css" title="style" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="../../../js/jquery-3.1.1.js"></script>
</head>
  <link rel="stylesheet" type="text/css" href="../js/jquery-ui-1.12.1.custom/jquery-ui.min.css">
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="../index.php">Turis<span class="logo_colour">Tico.com</span></a></h1>
          <h2>Administración del Sitio Web</h2>
        </div>
      </div>
      <div id="menubar">
      </div>
    </div>

    <div id="site_content">
        <h1>Inicio de Sesión de Administrador</h1> 
        <center>
            <div class="wrap2">
                <form action="#" method="post">
                    <div class="form_settings">
                        <p><span>Email: </span><input class="contact" type="text" name="txtEmail" id="txtEmail" value="" /></p>
                        <p><span>Contraseña: </span><input class="contact" type="password" name="txtPassword" id="txtPassword" value="" /></p>
                        <p><input class="submit" style="text-align: center" type="submit" name="btnLogin" id="btnLogin" value="Log in" onclick="logInAdmin();"/>
                        
                        </p>
                        
                    </div>
                </form>
                <p>

                </p>

            </div>
        </center>
    </div>
<?php include_once '../Base/footer.php'; ?>
</body>
</html>
