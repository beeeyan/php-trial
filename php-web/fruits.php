<?php
$fruits = $_POST["fruits"];
$type = $_POST["type"];

$color = "black";
if ($fruits === "apple" || $fruits === "cherry") {
    $color = "red";
} elseif ($fruits === "banana") {
    $color = "yellow";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>
<body>
    <div style="color : <?php echo $color; ?>">
        <?php echo htmlspecialchars($fruits . "/" . $type); ?>
    </div>
</body>
</html>