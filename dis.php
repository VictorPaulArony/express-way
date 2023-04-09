<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<title>Display Page</title>
	
	<style>
		body{
			background-image: url("image/logo.jpg");
			background-size: cover;
			background-repeat: no-repeat;
		}
    table {
      border-collapse: collapse;
      margin: 20px;
      padding: auto;
      width: 90%;
	  background-color: orange;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>
	<h1>Display</h1>
	<?php
	// Connect to the database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vehicle_db";

	$conn = mysqli_connect("localhost", "root", "", "vehicle_db");

	// Display the data
	$sql = "SELECT * FROM vehicle";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    echo "<table>";
	    echo "<tr><th>ID</th><th>Name</th><th>number plate</th><th>Vehicle Type</th><th>Action</th></tr>";
	    while($row = $result->fetch_assoc()) {
	        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["number_plate"]."</td><td>".$row["vehicle_type"]."</td><td><button><a href='edit.php?id=".$row["id"]."'>Edit</a></button> | <button w3-red><a href='delete.php?id=".$row["id"]."'>Delete</a></button></td></tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	// Edit the data
	if (isset($_GET["id"])) {
	    $id = $_GET["id"];
	    $sql = "SELECT * FROM vehicle WHERE id=".$id;
	    $result = $conn->query($sql);
	    if ($result->num_rows > 0) {
	        $row = $result->fetch_assoc();
	        echo "<form method='post' action='update.php'>";
	        echo "<input type='hidden' name='id' value='".$row["id"]."'>";
	        echo "<input type='text' name='name' value='".$row["name"]."'>";
	        echo "<input type='text' name='number_plate' value='".$row["number_plate"]."'>";
			echo "<input type='text' name='vehicle_type' value='".$row["vehicle_type"]."'>";
	        echo "<input type='submit' value='Update'>";
	        echo "</form>";
	    } else {
	        echo "0 results";
	    }
	}

	// Delete the data
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
	?>
	<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
        <p class="w3-right">Add Vehicle Details <button type="button" class="btn btn-danger w3-red">
        <a href="add.php" class="w3-hover-opacity ">CLICK</a></button>
		</p>
		<p class="w3-left">HOME DASHBOARD <button type="button" class="btn btn-danger w3-red">
        <a href="admin_dashboard.php" class="w3-hover-opacity ">CLICK</a></button>
		</p>
	</div>
</body>
</html>
