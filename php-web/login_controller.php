<?php
$userID = $_POST["userID"];
$password = $_POST["password"];

if ($userID === "itc" && $password  === "202004c"){
header("location: ./menu.php");
} else {
header("location: ./login.html");
}