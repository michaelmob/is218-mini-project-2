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
        return '<table>' . $rows . '</table>';
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
}
