<?php
namespace kaw393939\database;
use kaw393939\database\database;


class table {
    public function __construct(String $name, Array $columns) {
        $this->db = database::getInstance();
        $this->name = $name;
        $this->columns = $columns;
    }



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
