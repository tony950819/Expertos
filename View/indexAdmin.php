<!DOCTYPE HTML>
<html>

<head>
  <title>TurisTico.com - Administrador</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="../style/style.css" title="style" />
</head>

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
        <h1>Bienvenido a la página de Administrador</h1>
    </div>
<?php include_once '../Base/footer.php'; ?>
</body>
</html>
