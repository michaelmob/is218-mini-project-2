<?php
    namespace kaw393939;
    require_once '../vendor/autoload.php';
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
        <input type="file" name="file" />
    </form>
</body>
</html>
