<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
if ($requestMethod === "POST"){
    $keyword = $_POST["keyword"];
} else {
    $keyword = $_GET["keyword"];
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view of keyword</title>
</head>
<body>
    Input keyword : <?php echo $keyword; ?>
    Input keyword : <?php echo htmlspecialchars($keyword); ?>
</body>
</html>