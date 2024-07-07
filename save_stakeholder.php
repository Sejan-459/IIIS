<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save_stakeholder</title>
</head>
<body>
    <?php
include 'db.php';

$name = $_POST['name'];
$role = $_POST['role'];

$sql = "INSERT INTO stakeholders (name, role) VALUES ('$name', '$role')";

if ($conn->query($sql) === TRUE) {
    echo "New stakeholder added successfully. <a href='add_stakeholder.php' class='btn btn-primary '>Add another</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>