<?php

class Database
{
    private static $pdo;

    public static function getInstance()
    {
        if (null === self::$pdo) { // On s'assure que la connexion à la BDD se fait une seule fois
            self::$pdo = new PDO('mysql:host=127.0.0.1;dbname=film;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }

        return self::$pdo;
    }
}
