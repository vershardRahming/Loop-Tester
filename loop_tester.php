<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loop Tester</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<main>
    <h1>Loop Tester</h1>
    <h2>Process Scores</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="process_scores">

        <label>Score 1:</label>
        <input type="text" name="scores[]"
               value="<?php echo htmlspecialchars($scores[0]); ?>">
        <br />
        <br />

        <label>Score 2:</label>
        <input type="text" name="scores[]"
               value="<?php echo htmlspecialchars($scores[1]); ?>">
        <br />
        <br />

        <label>Score 3:</label>
        <input type="text" name="scores[]"
               value="<?php echo htmlspecialchars($scores[2]); ?>">
        <br />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Process Scores">
        <br />
        <br />

        <label>Scores:</label>
        <span><?php echo htmlspecialchars($scores_string); ?></span>
        <br />
        <br />

        <label>Score Total:</label>
        <span><?php echo $score_total; ?></span>
        <br />
        <br />

        <label>Average Score:</label>
        <span><?php echo $score_average; ?></span><br>
    </form>
    <h2>Process 1000 Die Rolls</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="process_rolls">

        <label>Number to Roll:</label>
        <select name="number_to_roll">
            
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <br />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Process Rolls">
        <br />
        <br />

        <label>Maximum Rolls:</label>
        <span><?php echo $max_rolls; ?></span>
        <br />
        <br />

        <label>Average Rolls:</label>
        <span><?php echo $average_rolls; ?></span><br>

    </form>
    <a href="index.php"><button>Click here to clear</button>
</main>
</body>
</html>