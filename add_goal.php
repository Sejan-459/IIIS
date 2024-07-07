<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add Goal</title>
</head>
<body>
<div class="container"style="width: 70%; margin-top:15px;">   
<form method="POST" action="save_goal.php">
        Requirement: 
        <select name="requirement_id" required class="form-select form-select-lg mb-3">
            <?php
            include 'db.php';
            $result = $conn->query("SELECT id, requirement FROM requirements");
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['requirement'] . "</option>";
            }
            ?>
        </select><br>
        <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="goal" required></textarea>
  <label for="floatingTextarea">Goal</label>
</div><br>
        <input type="submit" value="Add Goal" class="btn btn-success">
        <a href="./index.php" class="btn btn-primary ">Jump to home section</a>
    </form>
        </div>
</body>
</html>
