<?php
	
	$servername = "127.0.0.1";
	$username = "root";
	$password = "root";
	$db = "mysql";
	global $id2;

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
 
	$first2 = test_input($_POST["first1"]);
	$last2 = test_input($_POST["last1"]);
	$email2 = test_input($_POST["email1"]);
	$password2 = test_input($_POST["password1"]);

	$sql = "INSERT INTO first_schema.customers (ID, FirstName, LastName, Email, Password)
				VALUES ('$id2', '$first2', '$last2', '$email2', '$password2')";

	if ($conn->query($sql) === TRUE) {
		$id2 = $id2 + 1; 			
		echo "New account created successfully. ";
	} else {
		echo "Account already exists with this email!";
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