<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <title>Display Vehicles</title>
  <style>
		body{
			background-image: url("image/logo.jpg");
      
		}
    h1{
      font-size: 25px;
      font-family: "Poppins", sans-serif
    }
    form, .input, .select{
      font-size: 25px;
      
    }
    h1{
      font-size: 25px;

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
  <h1 >Display Vehicles</h1>
  <!-- Add search form -->
  <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="search">Search:</label>
    <input type="text" id="search" name="search">
    <select id="searchBy" name="searchBy">
      <option value="name">Name</option>
      <option value="number_plate">Number Plate</option>
      <option value="vehicle_type">Vehicle Type</option>
      <option value="id">ID</option>
    </select>
    <input type="submit" name="submit" value="Search">
  </form>
 

  <?php
  // Connect to database
  $conn = mysqli_connect("localhost", "root", "", "vehicle_db");

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Check if search has been submitted
  if (isset($_GET['submit'])) {
      // Construct SQL query based on search input
      $search = mysqli_real_escape_string($conn, $_GET['search']);
      $searchBy = mysqli_real_escape_string($conn, $_GET['searchBy']);
      $sql = "SELECT * FROM vehicle WHERE $searchBy LIKE '%$search%'";

      // Execute SQL query
      $result = mysqli_query($conn, $sql);

      // Check if there are any results
      if (mysqli_num_rows($result) > 0) {
          // Display results in a table
          echo "<table>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Number Plate</th>
                    <th>Vehicle Type</th>
                  </tr>";
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                      <td>" . $row['id'] . "</td>
                      <td>" . $row['name'] . "</td>
                      <td>" . $row['number_plate'] . "</td>
                      <td>" . $row['vehicle_type'] . "</td>
                    </tr>";
          }
          echo "</table>";

          // Display "Back to Display" button
          echo "<br><button><a href=\"dis.php\">Back to Display</a></button>";
      } else {
          echo "No results found.";
      }
  } else {
      // No search has been submitted, so display all vehicles
      $sql = "SELECT * FROM vehicle";

      // Execute SQL query
      $result = mysqli_query($conn, $sql);

      // Check if there are any results
      if (mysqli_num_rows($result) > 0) {
          // Display results in a table
          echo "<table>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Number Plate</th>
                    <th>Vehicle Type</th>
                  </tr>";
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                      <td>" . $row['id'] . "</td>
                      <td>" . $row['name'] . "</td>
                      <td>" . $row['number_plate'] . "</td>
                      <td>" . $row['vehicle_type'] . "</td>
                    </tr>";
          }
          echo "</table>";
      } else {
          echo "No vehicles found.";
      }
  }

  // Close database connection
  mysqli_close($conn);
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
