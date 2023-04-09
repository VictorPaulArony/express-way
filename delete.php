<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_db";

$conn = mysqli_connect("localhost", "root", "", "vehicle_db");

// Delete the record
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM vehicle WHERE id=".$id;
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
header("Location: dis_edit.php");
exit();
?>
