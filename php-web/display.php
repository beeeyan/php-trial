<?php
$size = $_GET["size"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($size === "l") {?>
        <h1>Lasrge</h1>
    <?php } elseif ($size === "m") {?>
        <h1>Medium</h1>
    <?php } elseif ($size === "s") {?>
        <h1>Small</h1>
    <?php } ?>
</body>
</html>