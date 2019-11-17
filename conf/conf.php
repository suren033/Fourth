<?php
    $conn = new mysqli("localhost", "root", "", "mydb");

	if ($conn->connection_error) {
		die ("Connection faild:" . $conn->error);
	}

	$sql = "INSERT INTO conf (title)
	VALUES ('Hello I\'m');";
	$sql .= "INSERT INTO conf (title)
	VALUES ('Alex Johnson');";
	$sql .= "INSERT INTO conf (title)
	VALUES ('Product Designer');";
	$sql .= "INSERT INTO conf (icon)
	VALUES ('fas fa-envelope');";
	$sql .= "INSERT INTO conf (title)
	VALUES ('getemail@email.com');";
	$sql .= "INSERT INTO conf (icon)
	VALUES ('fas fa-phone-alt');";
	$sql .= "INSERT INTO conf (num)
	VALUES ('+12 986 987 7867');";
	$sql .= "INSERT INTO conf (icon)
	VALUES ('fas fa-phone-alt');";
	$sql .= "INSERT INTO conf (title)
    VALUES ('37, Pollsatnd, New York, United State');";
	$sql .= "INSERT INTO conf (descrisption)
	VALUES ('Hello, Im a Patrick, web-developer based on Paris. I have rich experience in web site design & building and customization. Also I am good at');"; 
    $sql .= "INSERT INTO conf (title)
	VALUES ('Featured Projects');";
	$sql .= "INSERT INTO conf (title)
	VALUES ('Web Design');";
	$sql .= "INSERT INTO conf (title)
	VALUES ('Wrap');";
	$sql .= "INSERT INTO conf (description)
    VALUES ('DESIGN & DEVELOPMENT');";
    $sql .= "INSERT INTO conf (description)
	VALUES ('Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.');";
	$sql .= "INSERT INTO conf (title)
	VALUES ('shane', '-Shane Kavanagh');";
	$sql .= "INSERT INTO conf (icon)
	VALUES ('fab fa-facebook-f');";
	$sql .= "INSERT INTO conf (icon)
	VALUES ('fas fa-twitter');";
	$sql .= "INSERT INTO conf (icon)
	VALUES ('fas fa-github');";

    if ($conn->multi_query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>