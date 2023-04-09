<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_db";

$conn = mysqli_connect("localhost", "root", "", "vehicle_db");

// Update the record
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $name = $_POST['name'];
	$number_plate = $_POST['number_plate'];
	$vehicle_type = $_POST['vehicle_type'];
    $sql = "UPDATE vehicle SET name='$name', number_plate='$number_plate', vehicle_type='$vehicle_type' WHERE id=".$id;
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
header("Location: dis.php");
exit();
?>
