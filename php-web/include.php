<?php
// rand関数は乱数を生成します（この場合、1~10までの数値が表示される）
$number = rand(1, 10);
if ($number % 2 === 0){
    include("even.php");
} else {
    include("odd.php");
}