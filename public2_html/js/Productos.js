		var app = angular.module('crud',['ngRoute']);

		// Configuracion de las rutas y sus respectivas plantillas
		app.config(function($routeProvider) {
		  $routeProvider
		            .when('/', {
		                templateUrl : 'templates/home.html',
		                controller  : 'mainCtrl'
		            })
		            .when('/usuario', {
		                templateUrl : 'templates/Productos.html',
		                controller  : 'producto'
						
		            })

		          
		    });
		

		// Controlador principal de nuestra pagina
		app.controller('mainCtrl', function($scope) {
	        $scope.message = 'INSUMOS ARTECOM-U ';
	        $scope.subtitle = "Sistema de administracion Clientes y Productos";
			
	    });


		// Controlador de la entidad Usuario donde se incluiran cada una de sus funciones
		app.controller('producto', function($scope,$http) {

			$scope.message = 'ARTECOM';
	        $scope.subtitle = "Gestion de Usuario";

			// Al cargar la pagina, ejecutamos la funcion get() para rellenar la tabla
		    angular.element(document).ready(function () {
		    	$scope.get("");
		    	
		    });

		    // La funcion get() que hace la solicitud para obtener los datos
		    $scope.get = function(id){
		    	// Si la Id esta en blanco, entonces la solicitud es general
		    	if(id=="") {
		    		$http.get("http://localhost/api/api/productos").then(function (response) {
				        $scope.lista = response.data.data;
				        Materialize.toast(response.data.statusMessage, 4000);
				        
				    }, function(response) {
				    	// Aqui va el codigo en caso de error
				    });
				// Si la Id no esta en blanco, la solicitud se hace a un elemento especifico
		    	} else {
		    		$http.get("http://localhost/api/api/productos/" + id).then(function (response) {
				        $scope.nuevo = response.data.data[0];
				        Materialize.toast(response.data.statusMessage, 4000);
				    }, function(response) {
				    	// Aqui va el codigo en caso de error
				    });
		    	}
		    }

		    // La funcion post() que hace la solicitud para publicar un nuevo elemento
		    $scope.post = function() {
		    	$http.post("http://localhost/api/api/productos", $scope.nuevo)
			    	.then(function (response){
			            Materialize.toast(response.data.statusMessage, 4000);
			            $scope.nuevo = null;
			            $scope.get("");
			        }, 
			        function(response) {
			        	// Aqui va el codigo en caso de error
			        });
		    }

		    // La funcion put() que hace la solicitud para modificar un elemento especifico
		    $scope.put = function(id) {
		 
		    	$http.put("http://localhost/api/api/productos/" + id, $scope.nuevo)
			    	.then(
			    		function (response){
			            Materialize.toast(response.data.statusMessage, 4000);
			            $scope.nuevo = null;
			            $scope.get("");
			        }, 
			        function(response) {
			        	// Aqui va el codigo en caso de error
			        });

		    }

		    // La funcion delete() que hace la solicitud para eliminar un elemeto esepecifico
		    $scope.delete = function(id) {
		    	$http.delete("http://localhost/api/api/productos/" + id)
				   .then(
				       function (response){
				         console.log(response);
				         Materialize.toast(response.data.statusMessage, 4000);
				         $scope.nuevo = null;
				         $scope.get("");
				       }, 
				       function (response){
				         // Aqui va el codigo en caso de error
				       }
				    );
		    }

		});




	
