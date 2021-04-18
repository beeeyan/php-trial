<?php
// rand関数は乱数を生成します（この場合、1~10）
$number = rand(1, 10);
if ($number % 2 === 0) { ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even</title>
</head>
<body style="background-color:red; color:white;">
    an even page. <?php echo $number; ?>
</body>
</html>
<?php } else { ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even</title>
</head>
<body style="background-color:blue; color:white;">
    an odd page. <?php echo $number; ?>
</body>
</html>
<?php } ?>