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
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>Abi Cosmetics</title>

</head>

<body>
  <?php
  include '../navegacion.php';
  ?>
  <div class="container text-center">
    <div class="row row-cols-2">
      <div class="col">
        <form action="recibir_datos.php" method="POST" class="row g-3">
          <div class="col-md-6">
            <label for="inputnombre" class="form-label">Nombre</label>
            <input type="text" required class="form-control" id="inputnombre">
          </div>
          <div class="col-md-6">
            <label for="inputPrecio" class="form-label">Precio</label>
            <input type="number" required class="form-control" id="inputPrecio">
          </div>
          <div class="col-12">
            <label for="inputdesc" class="form-label">Descripcion</label>
            <textarea type="text" required class="form-control" id="inputdesc" placeholder="Descripcion"></textarea>
          </div>
          <div class="col-md-4">
            <label for="inputCategoria" class="form-label">Categoria</label>
            <select id="inputCategoria" required class="form-select">
              <option selected>Choose...</option>
              <option>
                <?php
                require 'conexion.php';
                $query = $conn->query("SELECT * FROM categorias");
                while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="' . $valores['id'] . '">' . $valores['nombre_categoria'] . '</option>';
                }
                ?>
              </option>
            </select>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Escoge una imagen</label>
            <input class="form-control" name="foto-producto[]" multiple accept="image/*" required type="file"
              id="formFile">
          </div>
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Enviar Datos</button>
          </div>
        </form>
      </div>

      <!-- mostrar datos  -->
      <div class="col">
        <?php
        include('conexion.php');
        $sqlQuery = "SELECT  p.*, p.id AS idproducto, i.* FROM productos AS p
            INNER JOIN imagenes AS i
            ON p.id = i.id_producto
            GROUP BY p.nombre
            ORDER BY p.precio DESC";
        $resultadoSQL = mysqli_query($conn, $sqlQuery);
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
              </tr>
            </thead>

            <tbody>
              <?php
              // $count = 1;
              while ($Data = mysqli_fetch_array($resultadoSQL)) {
                ?>
                <tr>
                  <th scope="row">
                    <?php echo $Data['id'] ?>
                  </th>
                  <td>
                    <?php echo $Data['nombre']; ?>
                  </td>
                  <td>
                    <?php echo $Data['desscripcion']; ?>
                  </td>
                  <td>
                    <?php echo $Data['precio']; ?>
                  </td>
                  <td>
                    <?php echo $Data['categoria']; ?>
                  </td>
                  <td>
                    <?php echo $Data['img']; ?>
                  </td>
                </tr>
              <?php } ?>
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