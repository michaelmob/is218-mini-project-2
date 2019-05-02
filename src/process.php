<?php
namespace kaw393939;
require_once '../vendor/autoload.php';
use kaw393939\models\csvTable;

$data = file\csvLoad::returnArray($_FILES['upfile']['tmp_name']);
$csvTable = csvTable::create($_POST['name'], $data);
if ($csvTable != null) {
    echo 'Table created.';
}

print_r($csvTable);
