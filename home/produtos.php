<?php 
require_once('../Database/config.php');

class Produto extends Database {
    public static function mostrarProdutos() {
        $pdo = Database::index();
        $stmt = $pdo->prepare('SELECT * FROM produtos');
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public static function mostrarProduto() {
        $pdo = Database::index();
        $stmt = $pdo->prepare('SELECT * FROM produtos WHERE id = :id');
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
}