<?php
	
	$servername = "127.0.0.1";
	$username = "root";
	$password = "root";
	$db = "mysql";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$first2 = test_input($_POST["first1"]);
	
	$sql = "SELECT * FROM first_schema.customers WHERE FirstName = '$first2'";
	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "last Name: " . $row["LastName"]. " - first Name: " . $row["FirstName"]. " - Email: " . $row["Email"]. "<br>";
      }
    } else {
        echo "0 results";
    }
	
function test_input($data) {
  //strips unneccesary characters from input
  $data = trim($data);
  //removes backslashes from input
  $data = stripslashes($data);
  //converts html to special characters
  $data = htmlspecialchars($data);
  return $data;
}

?>