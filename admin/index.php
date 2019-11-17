<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<nav class="nav">
		<ul class="ul">
			<li class="li"><a href="index.php">Home</a></li>
			<li class="li"><a href="what.php">What</a></li>
			<li class="li"><a href="skills.php">Skills</a></li>
			<li class="li"><a href="pricing.php">Pricing</a></li>
			<li class="li"><a href="blog.php">Blog</a></li>
			<li class="li"><a href="experiences.php">Experiences</a></li>
		</ul>
	</nav>
	<form action="saveInDb.php" method="post">
	<table class="conf_form">
		<tr>
			<th><input type="text" placeholder="name" name="var_name" class="conf_input"></th>
			<th><input type="text" placeholder="value" name="var_value" class="conf_input"></th>
	 		
		</tr>
		<input type="button" class="save" value="Save"></input>
	</table>
</form>
</body>
</html>