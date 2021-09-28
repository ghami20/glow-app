<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="styles.css">
	<script src="validaciones.js"></script>
	<title>Glow</title>
</head>
<body>
	<!--HEADER-->
	<?php require "views/shared/header/header.php" ?>
	<?php require "views/shared/inicio-sesion-modal/inicio-sesion-modal.php" ?>
	<!--CONTENIDO-->
	<div class="section-container">
		<section class="carousel-container">
			<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="10000">
						<div class='bg_rgba1 d-block w-100'></div>
						<div class="carousel-caption d-md-block">
							<h5 class="text-light">Crean una bicicleta fija que tritura botellas plásticas para reciclar pet</h5>
						</div>
						</div>
						<div class="carousel-item" data-bs-interval="2000">
							<div class='bg_rgba2 d-block w-100'></div>
							<div class="carousel-caption d-md-block">
								<h5 class="text-light">Los productores de plásticos reclaman un objetivo del 30% de contenido reciclado en envases para 2030</h5>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
				</div>
		</section>
		<section class="info-container">
			<div class="d-flex flex-row align-content-center">
				<div id="trees" >
					<img src="./assets/trees.png" alt="trees" class="tree-img">
				</div>
				<h3>¿Cómo funciona glow?</h3>	
			</div>
			<div>
				<p>Ganá puntos aprendiendo sobre reciclaje y canjealos por descuentos en tu tienda preferida</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error saepe nulla veniam temporibus unde ratione, modi ea eum. Voluptatum possimus vitae qui iusto, vel beatae exercitationem aliquam odit officia placeat. </p>
			</div>
		</section>
		<section class="reciclar-container" >
			<h1 class="text-center"> <img class="reciclar-container-img" src="./assets/leaf (1).png" alt="leaf"> ¿Qué podemos reciclar?  <img class="reciclar-container-img" src="./assets/leaf (1).png" alt="leaf"></h1>
			<div class="reciclar-info-container">
				<div class="reciclar-item">
					<h5>Envases de plástico</h5>
					<div class="d-flex flex-row">
						<img width="80px" heigth="80px" src="./assets/water-bottle.png" alt="botella">
						<p>Reducir su consumo, reutilizar y reciclar son las tres acciones básicas para reducir su impacto, ya que el plástico tarda alrededor de 700 años en degradarse.</p>
					</div>
				</div>
				<div class="reciclar-item">
					<h5>Tetrabriks</h5>
					<div class="d-flex flex-row">
						<img width="80px" heigth="80px" src="./assets/pack-of-milk.png" alt="botella">
						<p>¿Sabías que con 6 briks puede hacerse una caja de zapatos? Reciclar el brik de leche o de jugo es muy sencillo. Tan solo debemos depositarlo en el contenedor amarillo y así conseguir darles una segunda vida.</p>
					</div>
				</div>
				<div class="reciclar-item">
					<h5>Latas</h5>
					<div class="d-flex flex-row">
						<img width="80px" heigth="60px" src="./assets/soda-can.png" alt="botella">
						<p>Este tipo de envase está siempre presente en nuestra cocina. ¿Quién no tiene una lata de refresco o de conservas en el frigorífico?  Las latas están compuestas de aluminio y se pueden reciclar un número ilimitado de veces. ¡Al contenedor amarillo!</p>
					</div>
				</div>
				<div class="reciclar-item">
					<h5>Envases de papel y cartón</h5>
					<div class="d-flex flex-row">
						<img width="80px" heigth="80px" src="./assets/paper.png" alt="botella">
						<p>Todos los materiales de papel y cartón deben ir al contenedor azul para ser reciclados y ayudar a reducir la sobreexplotación de los recursos naturales</p>
					</div>
				</div>
				<div class="reciclar-item">
					<h5>Vidrio</h5>
					<div class="d-flex flex-row">
						<img width="80px" heigth="50px" src="./assets/glass.png" alt="botella">
						<p>Este material se puede volver a reutilizar mediante un proceso de lavado de desechos o a través de su fundición y puede ser reciclado al 100% una cantidad indefinida de veces. Para ello debemos separarlos del resto de materiales. ¡Al contenedor verde! </p>
					</div>
				</div>
			</div>
		</section>
		<section class="map-container mt-4">
			<h1 class="text-center"><img class="reciclar-container-img" src="./assets/leaf (1).png" alt="leaf">¿Dónde reciclo?<img class="reciclar-container-img" src="./assets/leaf (1).png" alt="leaf"></h1>
			<div class="filter-by">
				<p class="mb-0">Filtrar por </p>
				<select class="form-select w-50" aria-label="Default select example">
					<option class="w-50" selected>Todos</option>
					<option class="w-50" value="1">Cobre</option>
					<option class="w-50" value="2">Papel</option>
					<option class="w-50" value="3">Pilas</option>
					<option class="w-50" value="4">Vidrio</option>
				</select>
			</div>
			<img class="map-img" src="./assets/google-maps-bs-as.jpg" alt="map">
		</section>		
	</div>
	<!--FOOTER-->
	<?php require "views/shared/footer/footer.php" ?>

</body>
</html>