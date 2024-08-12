
<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/faviconQ.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <?php
    
    include 'assets/scripts.php';

    $ranked= displayRankedAndvanced($dbConnection, $animals, $geography, $history, $beginner, $advanced);

if (!empty($ranked)) {
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Points</th>';
    echo '<th>Time</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($ranked as $entry) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($entry['name']) . '</td>';
        echo '<td>' . htmlspecialchars($entry['points']) . '</td>';
        echo '<td>' . htmlspecialchars($entry['time']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo 'Keine Einträge gefunden.';
}

    ?>
</body>
</html>