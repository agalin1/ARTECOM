<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>aphotic - Free CSS Template by spyka Webmaster</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<!--
aphotic, a free CSS web template by spyka Webmaster (www.spyka.net)

Download: http://www.spyka.net/web-templates/aphotic/

License: Creative Commons Attribution
//-->
</head>

<body>
<div id="container">
	<div id="header">
    	<h1><a href="/">ADMINISTRADOR DEL SISTEMA </a></h1>
        <h2>ARTECOM-U</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul>
        	<li><a class="selected" href="index.html">HOME</a></li>
            <li><a href="mision.html">MISION</a></li>
            <li><a href="vision.html">VISION</a></li>
            <li><a href="productos.html">PRODUCTOS</a></li>
            <li><a href="login1.php">SISTEMA ADMINISTRACION </a></li>
        </ul>
    </div>
    <div id="body">
      <h2>Modulo De Administracion Artecom-U </h2>
	  <?php
	    session_start();
	    echo "Hola " . $_SESSION['user'];
	   ?>
      <p>El ingreso al sitio le permitira : </p>
      <ul>
        <li>Gestionar los clientes : </li>
      </ul>
      <p><a href="public_html/index.php">Ingresar a clientes</a></p>
      <p>&nbsp;</p>
      <ul>
        <li>Gestionar los Productos : </li>
      </ul>
      <p><a href="public2_html/index.php">Ingresar a producto</a></p>
      <div class="clear"></div>
  </div>

    <div id="footer">
      <div class="footer-content"></div>
    </div>
</div>
<div style="text-align: center; font-size: 0.75em;">Modulo de administracion </div>
</body>
</html>
