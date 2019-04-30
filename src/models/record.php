<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 4/11/19
 * Time: 12:44 PM
 */

namespace kaw393939\models;
use kaw393939\database\table;


class record
{
    public function __construct(Array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public static function createTable(String $name, Array $records) {
        $table = table::create($name, $records[0]);
        if ($table != null)
            $table->insert(array_shift($records));
        return $table;
    }
}
