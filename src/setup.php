<?php
namespace kaw393939;
require_once '../vendor/autoload.php';
use kaw393939\database\database;

$db = database::getInstance();
$stmt = $db->prepare("CREATE TABLE 'csvTables' (
	'id'	INTEGER PRIMARY KEY AUTOINCREMENT,
	'name'	TEXT,
	'tableName'	TEXT UNIQUE
);");
$stmt->execute();
