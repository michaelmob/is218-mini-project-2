<?php

namespace kaw393939\html;
use kaw393939\html\link;


class unorderedList
{
    public static function ul(String $items) {
        return '<ul>' . $items . '</ul>';
    }

    public static function li(String $text) {
        return '<li>' . $text . '</li>';
    }

    public static function fromObjectArray(Array $objects) {
        $items = '';
        foreach ($objects as $object) {
            $items .= unorderedList::li(
                link::a("display.php?id={$object->id}", $object->tableName)
            );
        }
        echo unorderedList::ul($items);
    }
}
