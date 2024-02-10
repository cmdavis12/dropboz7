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
$host = "davisdb.mysql.database.azure.com";
$user = "davis";
$password = "RAiden101";
$db = "visitordb";
// connect to the database
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $user, $password, $db, 3306);

if (isset($_POST['submit']))
{
	$yourName = $_POST['name'];
	$query = "INSERT INTO visitor (visitorName)
 	Values('yourName')";
	if(mysqli_query($conn, $query))
	echo "<p>Hi, $yourName, welcome to my cloud.</p>";
	else
	echo "<p>Hi, $yourName, please try again.</p>";
}
if (isset($_POST['view']))
{
$query = "SELECT * FROM visitor";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
$display = "<h2>All Visitors</h2>";
while($row = mysqli_fetch_assoc($result)){
$display .="Name: ".$row["visitorName"]."<br>";
$display .="Date Time: ".$row["visitTime"]."<br>";
}
}
echo $display;
}
mysqli_close($conn);
?>
<br>
<br>
<br>
<p>Christopher Davis</p>
<p>CISS301 Operating Systems and Cloud Computing</p>
<p>Dropbox Assignment 7</p>
<p>Instructor: Mr. Alfred Basta</p>
</body>
</html>
