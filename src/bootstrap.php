<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 4/11/19
 * Time: 11:07 AM
 */
namespace kaw393939;

use kaw393939\file\csvLoad;
use kaw393939\html\table;


class bootstrap
{
    public function __construct(string $filePath)
    {
        $records = csvLoad::returnArray($filePath);

        $record = array('year' => '1975', 'title' => 'hero', 'win' => 'yes');

        $object = factory\recordFactory::create($record);

        print_r($object);
        echo table::table('stuff');
    }

}
