<?php
include('../config/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT `password`, `rol_id`, `id` FROM `usuarios` WHERE `username` = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch();
        $stored_password = $row['password'];
        $stored_role = $row['rol_id'];
        $user_id = $row['id'];

        if ($password === $stored_password) {
            session_start();
            $_SESSION['user_id'] = $user_id;

            if ($stored_role == '1') {
                echo "
                <script>
                    window.location.href = '../admin.php';
                </script>
                ";
            } else if ($stored_role == '2') {
                echo "
                <script>
                    window.location.href = '../user.php';
                </script>
                ";
            }
        } else {
            echo "
            <script>
                alert('Contraseña incorrecta!');
                window.location.href = '../';
            </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Usuario no encontrado!');
                window.location.href = '../';
            </script>
            ";
    }
}
