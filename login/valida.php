<?php
class Login {
    public static function fazerLogin() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=lojaphp', 'root', 'dev102030');
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

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