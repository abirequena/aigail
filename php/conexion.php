<?php
    // $imagen = $_GET['imagen'];
    // $titulo = $_GET['nombre'];
    // $precio = $_GET['precio'];
    // $categoria = $_GET['categoria'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aby";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }  
    
    // $sql = "INSERT INTO faciales (imagen, titulo, precio, categoria)
    // VALUES ('$imagen', '$nombre', '$precio', '$categoria')";

    // if ($conn->query($sql) === TRUE) {
    //   echo "New record created successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // $conn->close();
?>