<?php
$title = 'Hello!PHP!';
$num1 = 30;
$num2 = 50;
$age = 20;
$array = [1, 2, 3, 4, 5, 6];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
</head>
<body>
    <!-- 変数の表示 -->
    <h1><?php echo $title ?></h1>

    <!-- 演算 -->
    <div>$num1 + $num2 = <?php echo $num1 + $num2 ?></div>

    <!-- 条件分岐 -->
    <?php if($age >= 20) { ?>
        <div>成人のユーザーです</div>
    <?php }?>

    <!-- 配列と繰り返し -->
    <?php for($i = 0; $i < count($array); $i++) { ?>
        <div><?php echo $array[$i]; ?><div>
    <?php } ?>
</body>
</html>