<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <title>Add Vehicle</title>
  
</head>
<body>


  <?php
  // Connect to database
  $conn = mysqli_connect("localhost", "root", "", "vehicle_db");

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Check if form is submitted
  if (isset($_POST['submit'])) {
      // Sanitize user input
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $number_plate = mysqli_real_escape_string($conn, $_POST['number_plate']);
      $vehicle_type = mysqli_real_escape_string($conn, $_POST['vehicle_type']);

      // Insert item into database
      $sql = "INSERT INTO vehicle (name, number_plate, vehicle_type) VALUES ('$name', '$number_plate', '$vehicle_type')";
      if (mysqli_query($conn, $sql)) {
          // Close database connection
          mysqli_close($conn);

          // Redirect to display page
          header("Location: dis.php");
          exit();
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  }

  // Close database connection
  mysqli_close($conn);
  ?>
<style>
body {
	background-image: url("image/logo.jpg");
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
     margin-top: 20px;
     box-shadow: 0 0 15px 10px orange;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
	color: black;
	font-family: sans-serif;
     font-weight: bold;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
     border-color: black;
}
label {
	color: black;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: skyblue;
	padding: 10px 15px;
	color: black;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	background: orange;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: underline;
} 
</style>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <h2>Add Vehicle</h2>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="number_plate">Number Plate:</label>
    <input type="text" id="number_plate" name="number_plate" required>

    <label for="number_plate">Vehicle Type:</label>
    <input type="text" id="vehicle_type" name="vehicle_type" required>
    
    <input type="submit" name="submit"class="ca" value="Add Vehicle">
  </form>
  <div class="w3-light-grey w3-container w3-padding-30" style="margin-top:75px;padding-right:58px;width:500px">
        <p class="w3-left">HOME DASHBOARD</p>
             <button  type="button" class="btn btn-danger w3-red w3-right w3-padding">
        <a href="admin_dashboard.php" class="w3-hover-opacity ">CLICK</a></button>
		
	</div>
</body>
</html>
