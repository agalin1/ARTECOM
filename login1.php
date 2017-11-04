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
        <h2>your website slogan here</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul>
        	<li><a class="selected" href="index.html">HOME</a></li>
            <li><a href="mision.html">MISION</a></li>
            <li><a href="vision.html">VISION</a></li>
            <li><a href="productos.html">PRODUCTOS</a></li>
            <li><a href="#">SISTEMA ADMINISTRACION </a></li>
        </ul>
  </div>
    <div id="body">
      <h2>Ingreso usuario administrador </h2>
      <p>Bienvenido al ingreso del modulo de administracion de clientes y productos ARTECOM-u </p>
      <p>
      
      <table width="200" border="0" bordercolor="#666666">
        <tr>
          <td><p>
            <?php 
session_start(); 
include_once "conexion.php"; 
  
function verificar_login($user,$password,&$result) { 
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'";
    $rec = mysql_query($sql); 
    $count = 0; 
  
    while($row = mysql_fetch_object($rec)) 
    { 
        $count++; 
        $result = $row; 
    } 
  
    if($count == 1) 
    { 
        return 1; 
    } 
  
    else 
    { 
        return 0; 
    } 
} 
  
if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
            $_SESSION['userid'] = $result->idusuario; 
			$_SESSION['user'] = $result->usuario;
			echo "Hola " . $_SESSION['user'];
            header("location:GestionAd.php"); 
        } 
        else 
        { 
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; 
        } 
    } 
?>
          </p>
            <form action="" method="post" class="login">
              <div>
                <label>Usuario</label>
                <p>
                  <input name="user" type="text" />
                </p>
              </div>
              <div>
                <label>Password</label>
                <p>
                  <input name="password" type="password" />
                </p>
              </div>
              <div>
                <input name="login" type="submit" value="login" />
              </div>
            </form>
          <?php 
} else { 
    echo 'Su usuario ingreso correctamente.'; 
    //echo '<a href="logout.php">Logout</a>'; 
} 
?></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>El ingreso al sitio le permitira : </p>
      <ul>
        <li>Gestionar los clientes </li>
        <li>Gestionar los clientes</li>
      </ul>
      <div class="clear"></div>
  </div>

    <div id="footer">
      <div class="footer-content"></div>
    </div>
</div>
<div style="text-align: center; font-size: 0.75em;">Modulo de administracion </div>
</body>
</html>
