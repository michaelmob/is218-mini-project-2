<?php
namespace kaw393939\database;
use kaw393939\database\database;


class table {


    public function __construct(String $name, Array $columns) {
        $this->db = database::getInstance();
        $this->name = $this->db->quote($name);
        $this->columns = $columns;
    }


    public function columns() {
        $result = '';
        foreach ($this->columns as $column) {
            $column = $this->db->quote($column);
            $result .= "$column, ";
        }
        return rtrim($result, ', ');
    }


    public static function create(string $name, Array $columns): table {
        $table = new table($name, $columns);

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


    public function insert(Array $records) {
        $columnCount = count($this->columns);

        $sql = "INSERT INTO '{$this->name}' ({$this->columns()}) VALUES ";
        foreach ($records as $record) {
            $sql .= '(';
            for ($i = 0; $i < $columnCount; $i++) {
                $sql .= $this->db->quote($record[$i]) . ", ";
            }
            $sql = rtrim($sql, ', ');
            $sql .= '), ';
        }

        $sql = rtrim($sql, ', ') . ";";
        return $this->db->exec($sql);
    }


}
