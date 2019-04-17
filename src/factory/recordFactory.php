<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 4/11/19
 * Time: 12:45 PM
 */

namespace kaw393939\factory;
use kaw393939\models\record;


class recordFactory
{
    public static function create(Array $data) {
        return new record($data);
    }
}
