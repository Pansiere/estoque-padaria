<?php

namespace App;

class Banco
{
    public static function conectar(): \PDO
    {
        $arquivo = dirname(__DIR__) . '/database/padaria.sqlite';

        $pdo = new \PDO('sqlite:' . $arquivo);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        return $pdo;
    }
}
