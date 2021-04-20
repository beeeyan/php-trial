<?php
function login($userID, $password){
    // file関数はファイル全体を読み込んで配列に格納する
    $lines = file("user.csv", FILE_IGNORE_NEW_LINES);
    foreach($lines as $line){
        $user = explode(",", $line);
        if($user[0] === $userID && $user[1] === $password){
            // ログインOK
            return true;
        }
    }
    return false;
}

$userID = $_POST["userID"];
$password = $_POST["password"];

if (login($userID, $password)){
    // セッションを開始
    session_start();
    // セッションからユーザIDを取得
    $_SESSION['userID'] = $userID;
    header("location: ./menu.php");
} else {
    header("location: ./login.php");
}