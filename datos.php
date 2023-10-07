<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="../css/tiny-slider.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <title>Abi Cosmetics</title>

</head>

<body>
  <?php
  include 'navegacion.php';
  ?>
  <div class="container text-center">
    <div class="row row-cols-2">
      <div class="col">
        <form action="php/recibir_datos.php" method="POST" class="row g-3" enctype="multipart/form-data">
          <div class="col-md-6">
            <label for="inputnombre" class="form-label">Nombre</label>
            <input type="text" name="inputnombre" required class="form-control" id="inputnombre">
          </div>
          <div class="col-md-6">
            <label for="inputPrecio" class="form-label">Precio</label>
            <input type="number" name="inputPrecio" required class="form-control" id="inputPrecio">
          </div>
          <div class="col-12">
            <label for="inputdesc" class="form-label">Descripcion</label>
            <textarea type="text" name="inputdesc" required class="form-control" id="inputdesc"
              placeholder="Descripcion"></textarea>
          </div>
          <div class="col-md-4">
            <label for="inputCategoria" class="form-label">Categoria</label>
            <select id="inputCategoria" name="inputCategoria" required class="form-select">
              <option selected>Choose...</option>
              <option>
                <?php
                require 'php/conexion.php';
                $query = $conn->query("SELECT * FROM categorias");
                while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="' . $valores['id'] . '">' . $valores['nombre_categoria'] . '</option>';
                }
                ?>
              </option>
            </select>
          </div>
          <div class="mb-3">
            <label for="foto_producto" class="form-label">Escoge una imagen</label>
            <input class="form-control" name="foto_producto[]" multiple accept="image/*" required type="file"
              id="foto_producto">
          </div>
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Enviar Datos</button>
          </div>
        </form>
      </div>

      <!-- mostrar datos  -->
      <div class="col">
        <?php
        include('php/conexion.php');
        $data = "SELECT productos.id, productos.nombre, productos.precio, productos.id_categoria, productos.descripcion, foto_producto.img
          FROM productos
          INNER JOIN foto_producto ON productos.id = foto_producto.id_producto;";
        $resultadoSQL = mysqli_query($conn, $data);
        if (mysqli_num_rows($resultadoSQL) > 0) {

          ?>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">descripcion</th>
                <th scope="col">precio</th>
                <th scope="col">categoria</th>
                <th scope="col">imagenes</th>
                <th scope="col">acciones</th>
              </tr>
            </thead>
            <?php
            $count = 1;
            while ($Data = mysqli_fetch_array($resultadoSQL)):
              ?>

              <tbody>
                <tr>
                  <th scope="row">
                    <?php echo $count++ ?>
                  </th>
                  <td>
                    <?php echo $Data['nombre']; ?>
                  </td>
                  <td>
                    <?php echo $Data['descripcion']; ?>
                  </td>
                  <td>
                    <?php echo '$' . number_format($Data["precio"], 1); ?>
                  </td>
                  <td>
                    <?php echo $Data['id_categoria']; ?>
                  </td>
                  <td>
                    <img class="img-fluid" src="<?php echo 'images/'.$Data['img']; ?>" alt="">                    
                  </td>
                  <td>
                    <button class="btn btn-danger"><i class="bi bi-trash-fill text-danger"></i></button>
                    <button class="btn btn-info"><i class="bi bi-pencil text-info"></i></button>
                  </td>
                </tr>
              <?php endwhile ?>
            </tbody>
          </table>
        </div>
        <?php
        } else { ?>
        <p class="sinResultados">No hay Resultados</p>
      <?php } ?>
    </div>
  </div>



</body>

</html>