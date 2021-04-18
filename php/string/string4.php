<?php
$score_data = file_get_contents("../file/score.csv");
$score_line_array = explode(PHP_EOL, $score_data);
foreach( $score_line_array as $score_line ){
    $score_array = explode(",", $score_line);
    if ($score_array[0] == "tanaka") {
        echo $score_line . PHP_EOL;
    }
}