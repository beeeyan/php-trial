<?php
$score_data = file_get_contents("../file/score.csv");
$score_line_array = explode(PHP_EOL, $score_data);
$total = 0;
foreach( $score_line_array as $score_line ){
    $score_array = explode(",", $score_line);
    $total += $score_array[2];
}
echo $total;