<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>View Conflicts</title>
</head>

<body>
    <div class="container"style="width: 70%; margin-top:15px;"> 
    <span>
    <h1 style="text-align:center;">Detected Conflicts</h1><a href="./index.php" class="btn btn-info mb-4 fw-bold">Jump to home section</a>
    </span>
    <table class="table table-striped">
        <tr>
            <th>Conflict Description</th>
            <th>Priority</th>
        </tr>
        <?php
        include 'db.php';
        $result = $conn->query("SELECT description, priority FROM conflicts ORDER BY priority DESC");
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['priority'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table></div>
</body>
</html>
