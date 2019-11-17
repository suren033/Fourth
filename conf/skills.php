<?php
	$conn = new mysqli('localhost', 'root', '', 'mydb');

	if ($conn->connect_error) {
		die ("Connection faild: " . $conn->connect_error);
	}

	$sql = "INSERT INTO skills (javascript, scriptnum, java, javanum, python, pythonnum, php, phpnum, ruby, rubynum, c, cnum)
	VALUES('Javascript', '86%', 'Java', '46%', 'Python', '38%', 'PHP', '17%', 'Ruby', '16%', 'C', '13%')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>