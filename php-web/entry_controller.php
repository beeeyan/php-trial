<?php
function entry($userID, $password) {
    $line = $userID . "," . $password . PHP_EOL;
    file_put_contents("user.csv", $line, FILE_APPEND);
}

$userID = $_POST["userID"];
$password = $_POST["password"];

if( $userID !== "" && $password !== "" ){
    // entry関数を呼び出す
    entry($userID, $password);
    // セッションを開始する
    session_start();
    // セッションにユーザーIDを保持
    $_SESSION["userID"] = $userID;
    // ログイン成功 menu.phpへリダイレクト
    header("location: ./menu.php");
} else {
    header("location: ./entry.php");
}