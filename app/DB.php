<?php

namespace app;

use Exception;
use PDO;

/**
 * Соединение с БД
 */
class DB
{

    /**
     * Соединение с БД
     */
    private static $connect;

    public static function pdo()
    {
        if (self::$connect) {
            return self::$connect;
        }

        $conf = require_once "config/db.php";

        try {
            self::$connect = new PDO('mysql:host=' . $conf['host'] . ';dbname=' . $conf['dbname'], $conf['user'], $conf['pass']);
        } catch (Exception $e) {
            echo "Ошибка соединения!";
            die();
        }

        return self::$connect;
    }
}
