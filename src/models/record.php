<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 4/11/19
 * Time: 12:44 PM
 */

namespace kaw393939\models;
use kaw393939\html\table;


class record
{
    public function __construct(Array $data)
    {
        foreach ($data as $key => $value) {
            if (!is_numeric($key))
                $this->{$key} = $value;
        }
    }


    public function asTableRow() {
        $cells = '';
        $fields = get_object_vars($this);

        foreach ($fields as $field) {
            $cells .= table::td($field);
        }

        return table::tr($cells);
    }
}
