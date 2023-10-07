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
		<title>ABI Cosmetics. </title>
	</head>

	<body>

<?php require 'navegacion.php'; ?>

			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Catalogo</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>

		<?php
// Incluye la configuración de la base de datos
require_once "php/conexion.php";

// Realiza una consulta SQL para obtener la lista de productos
$data = "SELECT productos.id, productos.nombre, productos.precio, productos.id_categoria, productos.descripcion, foto_producto.img
          FROM productos
          INNER JOIN foto_producto ON productos.id = foto_producto.id_producto;";;
$result = $conn->query($data);
if ($result->num_rows > 0){
?>
		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">
					<?php while ($row = $result->fetch_assoc()):?>
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="<?php echo 'images/' . $row['img']; ?>" style="width: 210px; height: 230;" class="img-fluid product-thumbnail">
							<h3 class="product-title"><?php echo $row["nombre"];?></h3>
							<strong class="product-price"><?php echo '$'.number_format($row["precio"],1); ?></strong>

							<span class="icon-cross">
								<img src="img/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<?php endwhile ?> 
		      	</div>
		    </div>
		</div>
	<?php } else {
			echo "<p class='text-danger'>No hay registros</p>";
	}?>



		


<!-- Inicio del Footer -->
<footer class="footer-section">
	<div class="container relative">

		

		

		<div class="border-top copyright">
			<div class="row pt-4">
				<div class="col-lg-6">
					<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Derechos Reservados &mdash; Diseño realizado por <a href="#">Abigail</a> Distribuido por <a hreff="#">ABI Cosmetics</a>  
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
<!-- Fin del Footer -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
