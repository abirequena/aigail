<?php
// Incluye la configuración de la base de datos
require_once "php/conexion.php";

// Define las variables e inicialízalas con valores vacíos
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Procesa los datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valida el nombre de usuario
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor ingresa un nombre de usuario.";
    } else {
        // Prepara una declaración SELECT para verificar si el nombre de usuario ya existe
        $sql = "SELECT id FROM usuarios WHERE username = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $param_username);
            $param_username = trim($_POST["username"]);

            if ($stmt->execute()) {
                $stmt->store_result();

                if ($stmt->num_rows == 1) {
                    $username_err = "Este nombre de usuario ya está en uso.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Algo salió mal. Por favor, intenta de nuevo más tarde.";
            }

            $stmt->close();
        }
    }

    // Valida la contraseña
    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor ingresa una contraseña.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "La contraseña debe tener al menos 6 caracteres.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Valida la confirmación de contraseña
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Por favor confirma la contraseña.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Las contraseñas no coinciden.";
        }
    }

    // Verifica si no hay errores de entrada antes de insertar en la base de datos
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        // Prepara una declaración INSERT para agregar el nuevo usuario a la base de datos
        $sql = "INSERT INTO usuarios (username, password) VALUES (?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $param_username, $param_password);

            // Establece los parámetros
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Encripta la contraseña

            // Ejecuta la declaración
            if ($stmt->execute()) {
                // Redirige al usuario a la página de inicio de sesión
                header("location: login.php");
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/reg.css">
</head>

<body>

    <div class="wrapper">
        <div class="inner">
            <div class="image-holder">
                <img src="img/registration.jpg" alt>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h3>Registrate aquí!</h3>

                <div class="form-holder active form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <input type="text" name="username" required value="<?php echo $username; ?>" placeholder="Usuario"
                        class="form-control">
                    <span class="help-block">
                        <?php echo $username_err; ?>
                    </span>
                </div>

                <div class="form-holder form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <input type="password" name="password" required value="<?php echo $password; ?>" placeholder="Contraseña"
                        class="form-control">
                    <span class="help-block">
                        <?php echo $password_err; ?>
                    </span>
                </div>
                <div class="form-holder form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <input type="password" name="confirm_password" required value="<?php echo $confirm_password; ?>"
                        placeholder="Confirma tu contraseña" class="form-control" style="font-size: 15px;">
                    <span class="help-block">
                        <?php echo $confirm_password_err; ?>
                    </span>
                </div>
                <!-- <div class="checkbox">
                            <label>
                                <input type="checkbox" checked> I agree all statement in <a href="#">Terms & Conditions</a>
                                <span class="checkmark"></span>
                            </label>
                        </div> -->
                <div class="form-login">
                    <button>Sign up</button>
                    <p>Ya tienes una cuenta? <a href="login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/reg.js"></script>
</body>

</html>