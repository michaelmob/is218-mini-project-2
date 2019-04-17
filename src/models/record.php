<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 4/11/19
 * Time: 12:44 PM
 */

namespace kaw393939\models;


class record
{
    public function __construct(Array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
