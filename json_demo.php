<?php

	$servername = "127.0.0.1";
	$username = "root";
	$password = "root";
	$db = "mysql";
	
	header("Content-Type: application/json; charset=UTF-8");
	$obj = json_decode($_GET["x"], false);
	
	$element = $obj->element;
	$table = $obj->table;
	$lim = $obj->limit;

	$conn = new mysqli($servername, $username, $password, $db);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$stmt = $conn->prepare("SELECT $element FROM $table ORDER BY $element desc LIMIT $lim");
	$stmt->execute();
	$result = $stmt->get_result();
    $outp = $result->fetch_all(MYSQLI_ASSOC);
	
	echo json_encode($outp);
?>