<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 4/11/19
 * Time: 12:11 PM
 */

namespace kaw393939\html;


class table
{
    public static function table(String $rows) {
        return '<table class="table table-striped">' . $rows . '</table>';
    }

    public static function th(String $headings) {
        return '<th>' . $headings . '</th>';
    }

    public static function tr(String $columns) {
        return '<tr>' . $columns . '</tr>';
    }

    public static function td(String $data) {
        return '<td>' . $data . '</td>';
    }

    public function fromObjectArray(Array $objects) {
        $rows = '';
        $firstField = true;

        foreach ($objects as $object) {
            $cells = '';
            $fields = get_object_vars($object);
            array_shift($fields);

            foreach ($fields as $field) {
                if ($firstField)
                    $cells .= table::th($field);
                else
                    $cells .= table::td($field);
            }

            $rows .= table::tr($cells);
            $firstField = false;
        }
        echo table::table($rows);
    }
}