<?php
namespace kaw393939\utils;

class str {
    function random($count) { 
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $len = strlen($chars) - 1;
        $result = '';

        for ($i = 0; $i < $count; $i++)
            $result .= $chars[rand(0, $len - 1)];

        return $result; 
    } 
}
