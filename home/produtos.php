<?php 

class Produto {
    public static function mostrarProdutos() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=lojaphp', 'root', 'dev102030');
            $stmt = $pdo->prepare('SELECT * FROM produtos');
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $result;
    }

    public static function mostrarProduto() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=lojaphp', 'root', 'dev102030');
            $stmt = $pdo->prepare('SELECT * FROM produtos WHERE id = :id');
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $result;
    }
}