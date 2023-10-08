<?php
include('php/conexion.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Obtén el ID del producto a eliminar
    $id_producto = $_GET['id'];

    // Obtén el nombre de la imagen del producto que se va a eliminar
    $sql = "SELECT img FROM foto_producto WHERE id_producto = $id_producto";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        $nombreImagen = $fila['img'];

        // Elimina la fila de la tabla 'productos'
        $sqlEliminarProducto = "DELETE FROM productos WHERE id = $id_producto";
        if (mysqli_query($conn, $sqlEliminarProducto)) {
            // Elimina la fila de la tabla 'foto_producto'
            $sqlEliminarImagen = "DELETE FROM foto_producto WHERE id_producto = $id_producto";
            if (mysqli_query($conn, $sqlEliminarImagen)) {
                // Elimina el archivo de imagen del directorio
                $rutaImagen = "images/$nombreImagen";
                if (unlink($rutaImagen)) {
                    // Redirige a la página de inicio o a donde desees después de eliminar
                    header("Location: datos.php");
                } else {
                    echo "Error al eliminar la imagen del directorio.";
                }
            } else {
                echo "Error al eliminar la fila de 'foto_producto'.";
            }
        } else {
            echo "Error al eliminar la fila de 'productos'.";
        }
    } else {
        echo "No se encontró la imagen asociada al producto.";
    }
} else {
    echo "ID de producto no válido.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>