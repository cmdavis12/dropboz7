<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>Create MySQL DB on Azure</title>
</head>
<body>
<?php
$host = "database-davis.mysql.database.azure.com";
$user = "davis";
$password = "RAiden101";
$db = "visitordb";
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $user, $password, $db, 3306);
if(msqli_query($conn, $query))
echo "<p>Database created.</p>";
mysqli_select_db($conn, "visitordb");
$query = "CREATE TABLE visitor
(
  visitorid INTEGER AUTO_INCREMENT,
  visitorName VARCHAR(100) NOT NULL,
  visitTime TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (visitorid)
)";
if(msqli_query($conn, $query))
echo "<p>Table created.</p>";
mysqli_close($conn);
?>
</body>
</html>
