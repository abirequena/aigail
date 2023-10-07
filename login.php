<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ya está autenticado, si es así, redirígelo a la página de inicio.
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Incluye la configuración de la base de datos
require_once "php/conexion.php";

// Define las variables e inicialízalas con valores vacíos
$username = $password = "";
$username_err = $password_err = "";

// Procesa los datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valida el nombre de usuario
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor ingresa tu nombre de usuario.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Valida la contraseña
    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor ingresa tu contraseña.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Verifica las credenciales del usuario
    if (empty($username_err) && empty($password_err)) {
        $sql = "SELECT id, username, password FROM usuarios WHERE username = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $param_username);
            $param_username = $username;

            if ($stmt->execute()) {
                $stmt->store_result();

                if ($stmt->num_rows == 1) {
                    $stmt->bind_result($id, $username, $hashed_password);
                    if ($stmt->fetch()) {
                        if (password_verify($password, $hashed_password)) {
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            header("location: index.php");
                        } else {
                            $password_err = "La contraseña que ingresaste no es válida.";
                        }
                    }
                } else {
                    $username_err = "No se encontró una cuenta con ese nombre de usuario.";
                }
            } else {
                echo "Oops! Algo salió mal. Por favor, intenta de nuevo más tarde.";
            }

            $stmt->close();
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/reg.css">
</head>

<body>


    <div class="wrapper">
        <div class="inner">
            <div class="image-holder">
                <img src="img/registration.jpg" alt>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h3>Ingresa aquí!</h3>
                
                    <div class="form-holder active form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <input type="text" name="username"  placeholder="Usuario"
                            class="form-control">
                        <span class="help-block">
                            <?php echo $username_err; ?>
                        </span>
                    </div>
                
                    <div class="form-holder form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Contraseña"
                            class="form-control">
                        <span class="help-block">
                            <?php echo $password_err; ?>
                        </span>
                    </div>
                <div class="form-login">
                    <button>Ingresar</button>
                    <p>No tienes una cuenta? <a href="registro.php">Registrarme</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/reg.js"></script>

</body>

</html>