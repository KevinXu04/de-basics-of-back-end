<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>

  <?php
      // laad hier via php je header in (vanuit je includes map)
      include "includes/header.php";
  ?>

  <div class="container">
    <?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "databank_php";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	// Check if a URL parameter exists
	if(isset($_GET['subject'])) {
		// URL parameter exists, retrieve the value
		$id = $_GET['subject'];

		// Sanitize and validate the input
		$id = mysqli_real_escape_string($conn, $id);

		// Fetch data from MySQL based on the URL parameter
		$sql = "SELECT * FROM onderwerpen WHERE id = '$id'";
		$result = $conn->query($sql);

		// Check if the query was successful
		if ($result && $result->num_rows > 0) {
			// Loop through the rows and do something with the data
			while ($row = $result->fetch_assoc()) {
				// Access the data using $row['column_name']
				echo "
					<div class='wrapper'>
						<img src='{$row['image']}' alt=Image description>
						<div class='text'>
							<h1>{$row['name']}</h1>
							<p>{$row['description']}</p>
						</div>
					</div>";

			}
		} else {
			echo "No data found.";
		}
	} else {
		// No URL parameter, handle homepage logic here
		echo "Welcome to the homepage!";
	}

    ?>
  </div>
  
  <?php
      // laad hier via php je footer in (vanuit je includes map)
      include "includes/footer.php";
  ?>
</body>
</html>