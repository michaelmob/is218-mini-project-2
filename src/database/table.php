<?php
namespace kaw393939\database;
use kaw393939\database\database;


class table {
    public static function create(string $name, Array $columns): bool {
        $db = database::getInstance();
        $name = $db->quote($name);

        $fields = '';
        foreach ($columns as $column) {
            $fields .= $db->quote($column) . " VARCHAR, ";
        }
        $fields = rtrim($fields, ', ');

        $statement = $db->prepare("CREATE TABLE IF NOT EXISTS $name (
            'id' INTEGER PRIMARY KEY, $fields);");

        return $statement->execute();
    }
}
