<?php
include('../config/conexion.php');

if (isset($_POST['name'], $_POST['username'], $_POST['password'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT `name` FROM `usuarios` WHERE `name` =  :name ");
        $stmt->execute(['name' => $name]);

        $nameExist =  $stmt->fetch(PDO::FETCH_ASSOC);

        if (empty($nameExist)) {
            $conn->beginTransaction();

            $insertStmt = $conn->prepare("INSERT INTO `usuarios` (`name`,`username`, `password`) VALUES (:name, :username, :password)");
            $insertStmt->bindParam('name', $name, PDO::PARAM_STR);
            $insertStmt->bindParam('username', $username, PDO::PARAM_STR);
            $insertStmt->bindParam('password', $password, PDO::PARAM_STR);

            $insertStmt->execute();

            $conn->commit();

            echo "
            <script>
                alert('Regitro Exitoso!');
                window.location.href = '../';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Cuenta ya fue registrada!');
                window.location.href = '../';
            </script>
            ";
        }
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Error: " . $e->getMessage();
    }
}
