<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add Stakeholder</title>
</head>
<body>
<div class="container"style="width: 70%; margin-top:15px;">

    <form method="POST" action="save_stakeholder.php">
        Name: <input type="text" name="name" required class="form-control"><br>
        Role: <input type="text" name="role" required class="form-control"><br>
        <input type="submit" class="btn btn-success" value="Add Stakeholder">
        <a href="./index.php" class="btn btn-primary ">Jump to home section</a>
    </form>
</div>

</body>
</html>
