<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add Requirement</title>
</head>
<body>  
<div class="container"style="width: 70%; margin-top:15px;"><form method="POST" action="save_requirement.php">
        Stakeholder: 
        <select name="stakeholder_id" required class="form-select form-select-lg mb-3">

            <?php
            include 'db.php';
            $result = $conn->query("SELECT id, name FROM stakeholders");
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
            }
            ?>
        </select><br>
        <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="requirement" required></textarea>
  <label for="floatingTextarea">Requirement</label>
</div><br>
        <input type="submit" class="btn btn-success " value="Add Requirement">
        
        <a href="./index.php" class="btn btn-primary ">Jump to home section</a>
    </form>
        </div>
</body>
</html>
