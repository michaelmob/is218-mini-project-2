<?php
namespace kaw393939\models;
use kaw393939\database\database;
use kaw393939\database\table;
use kaw393939\factory\recordFactory;
use kaw393939\utils\str;


class csvTable
{

    public function __construct(int $id, String $name, String $tableName) {
        $this->id = $id;
        $this->name = $name;
        $this->tableName = $tableName;
    }


    /**
     * Create csvTable row.
     */
    public static function create(String $name, Array $records) {
        // Create user table
        $tableName = 'csvTable_' . str::random(64);
        $table = table::create($tableName, $records[0]);
        if ($table == null)
            return null;
        $table->insert(array_shift($records));

        // Create csvTable record
        $sql = 'INSERT INTO csvTables (name, tableName) VALUES (?, ?)';
        $stmt = $table->db->prepare($sql);
        $stmt->execute([$name, $tableName]);
        return new csvTable($table->db->lastInsertId(), $name, $tableName);
    }


    /**
     * Fetch all csvTable rows.
     */
    public static function getAll() {
        $db = database::getInstance();
        $stmt = $db->prepare('SELECT id, name, tableName FROM csvTables;'); 
        $stmt->execute();

        $result = [];
        $rows = $stmt->fetchAll();
        foreach ($rows as $row)
            $result[] = new csvTable(...array_values($row));

        return $result;
    }


    /**
     * Fetch one csvTable row by its ID.
     */
    public static function get(int $id) {
        $db = database::getInstance();
        $stmt = $db->prepare('SELECT name, tableName FROM csvTables WHERE id=? LIMIT 1;'); 
        $stmt->execute([$id]);

        $row = $stmt->fetch();
        if ($row == null)
            return null;

        return new csvTable($id, $row['name'], $row['tableName']);
    }



}
