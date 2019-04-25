<?php
namespace kaw393939\database;
use kaw393939\database\database;


class table {
    public function __construct(String $name, Array $columns) {
        $this->db = database::getInstance();
        $this->name = $name;
        $this->columns = $columns;
    }


    public static function create(string $name, Array $columns): table {
        $table = new table($name, $columns);
        $name = $table->db->quote($name);

        $fields = '';
        foreach ($columns as $column) {
            $fields .= $table->db->quote($column) . " VARCHAR, ";
        }
        $fields = rtrim($fields, ', ');

        $statement = $table->db->prepare("CREATE TABLE IF NOT EXISTS $name (
            'id' INTEGER PRIMARY KEY, $fields);");

        if ($statement->execute())
            return $table;
        
        return null;
    }
    }
}
