<?php
namespace kaw393939;
require_once '../vendor/autoload.php';
use kaw393939\models\csvTable;
use kaw393939\html\unorderedList;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSV Import</title>
</head>
<body>
<h1>Upload CSV File</h1>
<form action="process.php" method="POST" enctype="multipart/form-data">
    <p>Input table name:</p> <input type="text" name="name"/><br/><br/>
    <input type="file" name="upfile" />
    <input type="submit" value="Upload" />
</form>

<?php unorderedList::fromObjectArray(csvTable::getAll()); ?>
</body>
</html>