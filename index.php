<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>Abi Cosmetics</title>
</head>

<body>

	<input type="checkbox" id="btn-modal">
	<div class="container-modal">
		<div class="content-modal">
			<div><img src="img/promo modal.png" alt=""></div>
			<div class="btn-cerrar">
				<label for="btn-modal">Cerrar</label>
			</div>
		</div>
		<label for="btn-modal" class="cerrar-modal"></label>
	</div>

<?php include 'navegacion.php' ;?>
	<!-- <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="index.php">ABI Cosmetics<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
				aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio</a>
					</li>
					<li><a class="nav-link" href="php/datos.php">Amin. Catalogo</a></li>
					<li><a class="nav-link" href="shop.php">Catalogo</a></li>
					<li><a class="nav-link" href="about.php">Sobre Nosotros</a></li>
				</ul>
			</div>
		</div>

	</nav> -->

	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>ABI Cosmetics <br> <span clsas="d-block"> <i> Belleza Natural </i></span></h1>
						<p class="mb-4">Nuestra misión es proporcionar soluciones de belleza y cuidado personal de alta
							calidad, promoviendo la autoestima y la confianza en nuestros clientes a través de productos
							seguros y efectivos.</p>
						<p><a href="shop.php" class="btn btn-secondary me-2">Ver Catalogo</a><label for="btn-modal"
								class="btn btn-white-outline">Promoción</label></p>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="hero-img-wrap">
						<img src="img/rosa final portada.png" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="product-section">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
					<h2 class="mb-4 section-title">Elaborados con excelentes ingredientes.</h2>
					<p class="mb-4">Ofrecemos una amplia gama de productos que incluyen cremas faciales, sueros,
						productos capilares, lociones corporales y más. Todos nuestros productos se formulan
						cuidadosamente con ingredientes naturales y seguros. </p>
					<p><a href="shop.php" class="btn">Explorar</a></p>
				</div>

				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="shop-facial.php">
						<img src="img/facial final.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Productos Faciales</h3>
						<strong class="product-price">Ver</strong>

						<span class="icon-cross">
							<img src="img/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>

				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="shop-corporal.php">
						<img src="img/corporal final.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Productos Corporales</h3>
						<strong class="product-price">Ver</strong>

						<span class="icon-cross">
							<img src="img/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>

				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="shop-capilar.php">
						<img src="img/capilar final.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Productos Capilares</h3>
						<strong class="product-price">Ver</strong>

						<span class="icon-cross">
							<img src="img/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>



			</div>
		</div>
	</div>



	<div id="carouselExampleCaptions" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/cinco-bonitas-mujeres-africanas-caucasicas-tops-marrones-jeans-negros-miran-camara-fondo-beige.jpg"
					class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>ABI Cosmetics</h5>
					<p>"En Abi Cosmetics, creemos que la verdadera belleza de una mujer proviene de su confianza
						interior, y nuestros productos están diseñados para realzar esa belleza natural."</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/hermosas-mujeres-jovenes-caucasicas-africanas-lenceria-posando-sobre-fondo-beige-concepto-estilo-vida.jpg"
					class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>ABI Cosmetics</h5>
					<p>"La belleza de cada mujer es única, y en Abi Cosmetics celebramos esa diversidad, ofreciendo
						soluciones de belleza que se adaptan a cada tipo de piel y estilo personal."</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/lindas-mujeres-jovenes-adultas-interraciales-ropa-informal-charlando-ellas-sobre-fondo-beige.jpg"
					class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>ABI Cosmetics</h5>
					<p>"Nuestra misión en Abi Cosmetics es empoderar a las mujeres para que se sientan hermosas en su
						propia piel, brindándoles productos de belleza que resalten su individualidad y autoestima."</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>




	<div class="why-choose-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-6">
					<h2 class="section-title">Productos y Servicios de Cuidado Personal</h2>
					<p> "Abi Cosmetics" es una gama integral de productos y servicios de cuidado personal diseñados para
						abordar las necesidades de bienestar y confianza personal de las personas. Esto incluye:</p>

					<div class="row my-5">
						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="img/truck.svg" alt="Image" class="imf-fluid">
								</div>
								<h3>Promoción de la Autoestima</h3>
								<p>Nuestra empresa se enfoca en mejorar la autoestima y la confianza personal, ayudando
									a las personas a sentirse mejor consigo mismas en todos los aspectos de sus vidas.
								</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="img/bag.svg" alt="Image" class="imf-fluid">
								</div>
								<h3>Productos de Alta Calidad</h3>
								<p>Ofrecemos productos de cuidado facial, capilar y corporal de alta calidad formulados
									con ingredientes naturales y seguros.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="img/support.svg" alt="Image" class="imf-fluid">
								</div>
								<h3>Educación y Recursos</h3>
								<p>Proporcionamos información educativa sobre el cuidado personal y la belleza para que
									los clientes tomen decisiones informadas sobre su rutina de belleza.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="img/return.svg" alt="Image" class="imf-fluid">
								</div>
								<h3>Asesoramiento Personalizado</h3>
								<p> Brindamos asesoramiento individualizado para ayudar a los clientes a seleccionar
									productos adecuados y desarrollar rutinas de cuidado personal adaptadas a sus
									necesidades.</p>
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-5">
					<div class="img-wrap">
						<img src="img/mujeres-africanas-caucasicas-alegres-diferentes-edades-camisas-blancas-riendose-mirando-camara-sobre-fondo-beige - copia.jpg"
							alt="Image" class="img-fluid">
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="we-help-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 mb-5 mb-lg-0">
					<div class="imgs-grid">
						<div class="grid grid-1"><img
								src="img/tres-jovenes-multirraciales-divirtiendose-posando-juntos-loft-moderno.jpg"
								alt="Untree.co"></div>
						<div class="grid grid-2"><img
								src="img/agradable-joven-alegre-dama-rizada-pelo-oscuro-echando-cabeza-atras-mientras-rie-felizmente-ojos-cerrados-pie-sobre-pared-azul-manos-abajo.jpg"
								alt="Untree.co"></div>
						<div class="grid grid-3"><img src="img/mujeres copia.jpg" alt="Untree.co"></div>
					</div>
				</div>
				<div class="col-lg-5 ps-lg-5">
					<h2 class="section-title mb-4">Necesidad de Bienestar y Confianza Personal</h2>
					<p>La sociedad actual está marcada por un ritmo de vida acelerado y altas expectativas de belleza y
						cuidado personal. Como resultado, muchas personas experimentan estrés, falta de tiempo y
						preocupaciones relacionadas con su apariencia, lo que puede afectar su bienestar emocional y
						autoestima.</p>

					<ul class="list-unstyled custom-list my-4">
						<li>Preocupaciones de Belleza</li>
						<li>Autoestima y <br> Confianza</li>
						<li>Gestión del Estrés</li>
						<li>Falta de Tiempo</li>
					</ul>
					<p><a herf="#" class="btn">Confia en nosotros</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="popular-product">
		<div class="container">
			<div class="row">

				<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="product-item-sm d-flex">
						<div class="thumbnail">
							<img src="img/faciales.png" alt="Image" class="img-fluid">
						</div>
						<div class="pt-3">
							<h3>Productos Faciales</h3>
							<p> amplia gama de productos de cuidado facial de alta calidad formulados con ingredientes
								naturales y seguros. </p>
							<p><a href="shop-facial.php">Ver</a></p>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="product-item-sm d-flex">
						<div class="thumbnail">
							<img src="img/corporal.png" alt="Image" class="img-fluid">
						</div>
						<div class="pt-3">
							<h3>Productos Corporales</h3>
							<p> línea de productos corporales diseñados para hidratar y suavizar la piel. </p>
							<p><a href="shop-corporal.php">Ver</a></p>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="product-item-sm d-flex">
						<div class="thumbnail">
							<img src="img/capilar.png" alt="Image" class="img-fluid">
						</div>
						<div class="pt-3">
							<h3>Productos Capilares</h3>
							<p>productos capilares de alta calidad que nutren y revitalizan el cabello. </p>
							<p><a href="shop-capilar.php">Ver</a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>



	<footer class="footer-section">
		<div class="container relative">





			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<p class="mb-2 text-center text-lg-start">Copyright &copy;
							<script>document.write(new Date().getFullYear());</script>. Derechos Reservados &mdash;
							Diseño realizado por <a href="#">Abigail</a> Distribuido por <a hreff="#">ABI Cosmetics</a>
					</div>

					<div class="col-lg-6 text-center text-lg-end">
						<ul class="list-unstyled d-inline-flex ms-auto">
							<li class="me-4"><a href="#">Terminos &amp; Condiciones</a></li>
							<li><a href="#">Politica de privacidad</a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</footer>


	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>