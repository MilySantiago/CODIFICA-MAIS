<?php

namespace App;

use PDO;
use PDOException;

class ConexaoBD
{
    public static function createConnection(): PDO
    {
        try {
            $connection = new PDO(
                "mysql:host=localhost;dbname=controles_produto",
                'root',
                ''
            );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $connection;
            echo "boa";
        } catch (PDOException $e) {
            die('Erro ao conectar com o banco de dados' . $e->getMessage());
        }

        return false;
    }
}