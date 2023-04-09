<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_db";

$conn = mysqli_connect("localhost", "root", "", "vehicle_db");

// Retrieve the record to be edited
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM vehicle WHERE id=".$id;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display the edit form
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
            <title>Edit Record</title>
            <link rel="stylesheet" href="style2.css">
        </head>
        <body>
            
            <form method="post" action="update.php">
            <h2>Edit Record</h2>
                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                Name: <input type="text" name="name" value="<?php echo $row["name"]; ?>"><br>
                Number Plate: <input type="text" name="number_plate" value="<?php echo $row["number_plate"]; ?>"><br>
                Vehicle Type: <input type="text" name="vehicle_type" value="<?php echo $row["vehicle_type"]; ?>"><br>
                <input type="submit" value="Update">
            </form>
            
        </body>
        </html>
        <?php
    } else {
        echo "Record not found";
    }
}

// Close the database connection
$conn->close();
?>
