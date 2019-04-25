<?php
namespace kaw393939;
require_once '../vendor/autoload.php';
use kaw393939\database\table;

$data = file\csvLoad::returnArray($_FILES['upfile']['tmp_name']);

if (table::create('table_name', $data[0])) {
    echo 'Table created.';
}
