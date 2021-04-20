<?php
function getTweets(){
    $tweets = [];
    $date_array = [];
    $lines = file("tweet.csv", FILE_IGNORE_NEW_LINES);

    // $lines = array_reverse($lines);
    foreach($lines as $line){
        $tweet = explode(",", $line);
        $date_array[] = $tweet[2];
        $tweets[] = $tweet;
    }
    array_multisort($date_array, SORT_DESC, $tweets);
    return $tweets;
}

session_start();
$userID = $_SESSION['userID'];

$tweets = getTweets();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT CARET</title>
</head>
<body>
    <img src="logo.png" alt="">
    <?php echo $userID . "さんでログイン中"; ?>
    <hr>
    <form action="tweet_controller.php" method="post">
        <input type="text" name="comment">
        <input type="submit" value="tweet">
    </form>
    <ul>
    <?php foreach($tweets as $tweet) { ?>
        <li><?php echo $tweet[0]; ?>
            <span style="font-size:14px">
                (<?php echo $tweet[1] . "/" . $tweet[2] ?>)
            </span>
        </li>
    <?php } ?>
    </ul>
    <a href="menu.php"></a>
</body>
</html>