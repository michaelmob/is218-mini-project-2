<?php
namespace kaw393939;
require_once '../vendor/autoload.php';
use kaw393939\models\csvTable;

$filename = $_FILES['upfile']['tmp_name'];
if (!file_exists($filename)) {
    echo 'Invalid file!';
    exit();
}

if (empty($_POST['name'])) {
    echo 'Invalid name for a table!';
    exit();
}

$data = file\csvLoad::returnArray($filename);
$csvTable = csvTable::create($_POST['name'], $data);
if ($csvTable != null) {
    echo "Table {$csvTable->id} created.";
}
