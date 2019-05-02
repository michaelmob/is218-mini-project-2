<?php

namespace kaw393939\html;


class link
{
    public static function a(String $url, String $name) {
        return "<a href='$url'>$name</a>";
    }
}