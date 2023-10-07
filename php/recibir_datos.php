<?php

include('conexion.php');

//ucwords pasar a mayúsculas solo la primera letra de toda la cadena
$nombre = ucwords($_POST['inputnombre']);
//strtoupper Para pasar a Mayuscula
$precio = (int) $_POST['inputPrecio'];
$descripcion = trim(ucwords($_POST['inputdesc']));
$categoria = $_POST['inputCategoria'];
$id = $conn->query("SELECT COUNT(*) as total_registros
FROM productos;");
if ($id->num_rows > 0) {
    // Obtiene el resultado como un arreglo asociativo
    $row = $id->fetch_assoc();

    
    $currentId = (int)$row["total_registros"];
}
$currentId = $currentId + 1;
    
    try {
    
    //Verificando si existe el directorio
    $dirLocal = "images";
    if (!file_exists($dirLocal)) {
        mkdir($dirLocal, 0777, true);
    }
    $miDir = opendir($dirLocal); //Habro el directorio
    
    
    if (isset($_POST['submit']) && count($_FILES['foto_producto']['name']) > 0) {
    
        // Recorrer cada archivo subido
    
        foreach ($_FILES['foto_producto']['name'] as $i => $name) {
    
            //strlen método de php pues devuelve la longitud de una cadena
            if (strlen($_FILES['foto_producto']['name'][$i]) > 1) {
    
                $fileName = $_FILES['foto_producto']['name'][$i];
                $sourceFoto = $_FILES['foto_producto']['tmp_name'][$i];
                $tamanoFoto = $_FILES["foto_producto"]['size'][$i];
                $restricciontamano = "500"; //MB
                if ((($tamanoFoto / 1024) / 1024) <= $restricciontamano) {
    
                    /**Renombrando cada foto que llega desde el formulario */
                    $nuevoNombreFile = substr(md5(uniqid(rand())), 0, 15);
                    $extension_foto = pathinfo($fileName, PATHINFO_EXTENSION);
                    $nombreFoto = $nuevoNombreFile . '_' . $nombre . '.' . $extension_foto;
    
    
                    $resultadoFotos = '../' . $dirLocal . '/' . $nombreFoto;
    
                    // Mover archivo a una ubicación permanente
                    move_uploaded_file($sourceFoto, $resultadoFotos);
    
                    // Insertar información del archivo en la base de datos
                    $sql = "INSERT INTO foto_producto (img, id_producto) VALUES ('{$nombreFoto}', '{$currentId}')";
                    mysqli_query($conn, $sql);
    
                } else {
                    echo '<p style="color:red">Existe una foto que supera el peso Maximo de ' . $tamanoFoto . '</p>';
                }
            }
        }
    
        /**Nota:Obvio no se puede meter este INSERT dentro del Foreach, por que crearía el mismo clientes
         * la n cantidad de veces de acuerda al numero de imagenes que se esten cargando, solo aplicaría
         * para cuando se carga una sola imagen.
         */
        $sql = "INSERT INTO productos (nombre, precio, descripcion, id_categoria) VALUES ('{$nombre}', '{$precio}', '{$descripcion}', '{$categoria}')";
        mysqli_query($conn, $sql);
    
    
    }
    // Cerrar conexión a la base de datos
    mysqli_close($conn);
    
    // Redirigir a la página de inicio
    header("Location: datos.php");
} catch (\Throwable $th) {
    echo $th;
}