<?php
namespace kaw393939\database;
use kaw393939\config;


class database {
    protected static $pdo;

    public static function createInstance() {
        try {
            self::$pdo = new \PDO("sqlite:" . config::DATABASE_PATH);
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $error) {
            echo $error->getMessage();
        }
    }

    public static function getInstance() {
        if (self::$pdo == null)
            self::createInstance();

        return self::$pdo;
    }
}
