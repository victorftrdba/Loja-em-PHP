<?php
require_once('../Database/config.php');

class Login extends Database {
    public static function fazerLogin() {
        $pdo = Database::index();
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
        $stmt->bindValue(':usuario', $_POST['usuario']);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);

        if ($result->usuario && $result->senha == md5($_POST['senha'])) {
            session_start();
            $_SESSION['usuario'] = $result->usuario;
            header('Location: /home/index.php?sucesso');
        } else {
            header('Location: /login/index.php?falha');
        }
    }
}

Login::fazerLogin();