<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detect_conflicts</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container"style="width: 70%; margin-top:15px;">    
<a href="./index.php" class="btn btn-info mb-4 fw-bold">Jump to home section</a>
    <?php
include 'db.php';

$sql = "SELECT g1.id as goal1_id, g1.goal as goal1, g2.id as goal2_id, g2.goal as goal2 
        FROM goals g1 
        JOIN goals g2 ON g1.requirement_id = g2.requirement_id 
        WHERE g1.id != g2.id";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    // Detect conflicts based on goal comparison logic (example logic)
    if (strpos($row['goal1'], 'preferred') !== false && strpos($row['goal2'], 'preferred') === false) {
        $description = "Conflict between goal: '" . $row['goal1'] . "' and goal: '" . $row['goal2'] . "'";
        $priority = 1;  // Example priority setting

        $sql_insert = "INSERT INTO conflicts (goal_id1, goal_id2, description, priority) 
                       VALUES (" . $row['goal1_id'] . ", " . $row['goal2_id'] . ", '$description', $priority)";
        $conn->query($sql_insert);
    }
}

echo "<h1 style='text-align: center;'>Conflict detection completed.</h1>";

$conn->close();
?>
</div>
</body>
</html>