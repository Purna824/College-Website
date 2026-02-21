<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$password = $_POST['password'];
	$registrationnumber = $_POST['registrationnumber'];
	$email = $_POST['email'];
	$mobilenumber = $_POST['mobilenumber'];

	// Database connection
	$conn = new mysqli_connect('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : " $conn->connect_error);
	} 
	else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, password, registrationnumber, email, mobilenumber) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $password, $registrationnumber, $email, $mobilenumber);
		$execval = $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>