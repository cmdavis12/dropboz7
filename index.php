<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>My PHP Website</title>
</head>
<body>
<h1>Welcome to the cloud!</h1>
<form action = "" method = "post">
Your name:
<br>
<input type = "text" name = "name" size = "30" maxlength = "30">
<br>
<input type = "submit" name = "submit" value = "Submit">
</form>
<?php
if (isset($_POST['submit']))
{
	$yourName = $_POST['name'];
	echo "<p>Hi, $yourName, welcome to my cloud.</p>";
}
?>
<br>
<br>
<p>Christopher Davis</p>
<p>CISS301 Operating Systems and Cloud Computing</p>
<p>Dropbox Assignment 7</p>
<p>Instructor: Mr. Alfred Basta</p>
</body>
</html>
