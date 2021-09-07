<?php 

class Database {
    public static function index() {
        try {
            return $pdo = new PDO('mysql:host=localhost;dbname=lojaphp', 'root', '');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
