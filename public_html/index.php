<!DOCTYPE html>
<html lang="es" ng-app="crud" >
<head>
	<meta charset="UTF-8">
	<title>Rest API Visual Client</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/materialize.min.css">
	<script src="js/angular.min.js"></script>
	<script src="js/angular-route.js"></script>
	<script src="js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="styles.css" type="text/css" />
	<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style4 {font-size: 24px}
-->
</style>
</head>
<body ng-controller="mainCtrl">
<table width="200" border="0">
  <tr>
     <td>
	        <div class="nav-wrapper write">
	          <div align="right">
	            <?php
				session_start();
				echo "Bienvenido " . $_SESSION['user'];
				echo '<a href="../logout.php"> Salir </a>';
			    ?>
                 </div>
           </div></td>
  </tr>
</table>
<table width="200" border="1">
  <tr>
     <td><nav>
		    <div class="nav-wrapper blue">
				
		      <a href="#!/" class="brand-logo">Sistemas Administrador ARTECOM-U </a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="#!/">Home</a></li>
		        <li><a href="#!/usuario">Gestion  Usuarios</a></li>
			  </ul>
		   </div>
</nav>
		        
<div class="container">
		<div ng-view>
		  <ul id="nav-mobile" class="right hide-on-med-and-down">
	      </ul>
	    </div>
</div></td>
  </tr>
</table>

	<blockquote>&nbsp;</blockquote>
	<p>
	  <script src="js/custom.js"></script>
</p>
	<p>		
	  <script src="js/materialize.min.js"></script>
</p>
		
</body>
</html>

