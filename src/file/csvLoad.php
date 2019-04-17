<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 4/11/19
 * Time: 12:02 PM
 */

namespace kaw393939\file;


class csvLoad
{
    public static function returnArray(String $filePath) :array
    {
        $file = fopen($filePath,"r");
        $records = array();

        while(!feof($file))
        {
            $records[] = fgetcsv($file);
        }

        fclose($file);
        return $records;
    }
}
