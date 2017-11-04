<!DOCTYPE html>
<html lang="es" ng-app="crud" >
<head>
	<meta charset="UTF-8">
	<title>Rest API Visual Productos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/materialize.min.css">
	<script src="js/angular.min.js"></script>
	<script src="js/angular-route.js"></script>
	<script src="js/jquery-3.1.1.min.js"></script>
	
</head>
<body ng-controller="mainCtrl">
<table width="200" border="0">
  <tr>
     <td>
		    <div class="nav-wrapper write">
				<?php
				session_start();
				echo "Bienvenido " . $_SESSION['user'];
				echo '<a href="../logout.php"> Salir </a>';
			    ?>
		   </div>
</td>
  </tr>
</table>
<table width="200" border="1">
  <tr>
     <td><nav>
		    <div class="nav-wrapper blue">
				
		      <a href="#!/" class="brand-logo">Empresa De muebles </a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="#!/">Home</a></li>
		        <li><a href="#!/usuario">Gestion Productos  </a></li>
			  </ul>
		   </div>
</nav>
		        
<div class="container">
		<div ng-view>
		  <ul id="nav-mobile" class="right hide-on-med-and-down">
		    
	      </ul>
	    </div>
</div>
</td>
  </tr>
</table>

	<p>
	  <script src="js/Productos.js"></script>
</p>
	<p>		
	  <script src="js/materialize.min.js"></script>
</p>
		
</body>
</html>

