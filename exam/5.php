<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();
$count = 0;
$_SESSION[“key1”] = 2;
$_SESSION[“key2”] = 4;
session_destroy();
$count = count($_SESSION);
echo $count;
?>
</body>
</html>
