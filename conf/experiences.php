<?php
	$conn = new mysqli('localhost', 'root', '', 'mydb');

	if ($conn->connect_error) {
		die ("Connection faild: " . $conn->connect_error);
	}

	$sql = "INSERT INTO experiences (art, oxford, num, fact)
	VALUES ('Art & Multimedia From', 'Oxford University', '2005-2008', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum');";
	$sql .= "INSERT INTO experiences (art, oxford, num, fact)
	VALUES ('Art & Multimedia From', 'Oxford University', '2005-2008', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum');";
	$sql .= "INSERT INTO experiences (art, oxford, num, fact)
	VALUES ('Art & Multimedia From', 'Oxford University', '2005-2008', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum');";
	//$sql .= "INSERT INTO experiences (uxui, iron, num, responsibility, validate, 'project')
	//VALUES ('UI/UX Designer', 'IronSketch', '2005-2008', 'Responsibility :', 'Validate CSS', 'Project Management');";
	//$sql .= "INSERT INTO experiences (art, oxford, num, responsibility, validate, 'project')
	//VALUES ('Art & Multimedia From', 'Oxford University', '2005-2008', 'Responsibility :', 'Validate CSS', 'Project Management');";
	//$sql .= "INSERT INTO experiences (art, oxford, num, responsibility, validate, 'project')
	//VALUES ('Art & Multimedia From', 'Oxford University', '2005-2008', 'Responsibility :', 'Validate CSS', 'Project Management');";


	if ($conn->multi_query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>