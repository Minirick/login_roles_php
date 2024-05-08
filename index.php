<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .login-container,
        .registration-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            margin-top: 50px;
        }
    </style>

</head>

<body>

    <div class="container">
        <!-- Login Form -->
        <div class="login-container shadow" id="loginForm">
            <h2 class="text-center">Software</h2>
            <div class="login-form">
                <form action="./modulos/login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="row mb-3">
                        <div class="form-check col-6">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recordar Contraseña</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Acceder</button>
                </form>
            </div>
        </div>
        <br>
        <div class="col-12 text-center">
            <p class="">¿Aún no tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
        </div>

    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
