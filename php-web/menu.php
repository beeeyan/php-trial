<?php
// セッションを開始
session_start();
// セッションからユーザーIDを取得
$userID = $_SESSION["userID"];

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
    <img src=logo.png>
    <?php echo $userID . "さんでログイン中" ; ?>
    <hr>
    <ul>
        <li><a href="tweet.php">tweet</a></li>
        <li>Menu 2</li>
        <li>Menu 3</li>
    </ul>
</body>
</html>