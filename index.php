<?php


$scores = array();
$scores[0] = '';
$scores[1] = '';
$scores[2] = '';
      
$scores_string = '';
$score_total = 0;
$score_average = 0;
$max_rolls = 0;
$average_rolls = 0;


$action = filter_input(INPUT_POST, 'action');
switch ($action) {
    case 'process_scores':
        $scores = $_POST['scores'];

        
        if (empty($scores[0]) ||
            empty($scores[1]) ||
            empty($scores[2]) ||
            !is_numeric($scores[0]) ||
            !is_numeric($scores[1]) ||
            !is_numeric($scores[2]))
       {
                $scores_string = 'You must enter three valid numbers for scores.';
                break;
        }

        $scores_string = '';
        foreach ($scores as $s)
       {
            $scores_string .= $s . '|';
        }
        $scores_string = substr($scores_string, 0, strlen($scores_string)-1);
       for($i = 0; $i < count($scores); $i++)
       {
           $score_total += $scores[$i];
       }
        
        $score_average = $score_total / count($scores);
      
       
        $score_total_f = number_format($score_total, 2);
        $score_average_f = number_format($score_average, 2);

        break;
    case 'process_rolls':
        $number_to_roll = filter_input(INPUT_POST, 'number_to_roll',
                FILTER_VALIDATE_INT);

        $total = 0;
        $count = 0;
        $max_rolls = -INF;

        
        while ($count < 10000) {
            $rolls = 1;
            while (mt_rand(1, 6) != $number_to_roll) {
                $rolls++;
            }
            $total += $rolls;
            $count++;
            $max_rolls = max($rolls, $max_rolls);
        }
        $average_rolls = $total / $count;

        break;
}
include 'loop_tester.php';
?>

