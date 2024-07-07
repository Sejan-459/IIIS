<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save_requirement</title>
</head>
<body>
    <?php
    include 'db.php';
    
    $stakeholder_id = $_POST['stakeholder_id'];
    $requirement = $_POST['requirement'];
    
    $sql = "INSERT INTO requirements (stakeholder_id, requirement) VALUES ('$stakeholder_id', '$requirement')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New requirement added successfully. <a href='add_requirement.php' class='btn btn-primary '>Add another</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    ?>
    
    
</body>
</html>