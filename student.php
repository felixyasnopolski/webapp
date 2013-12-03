<html>
<head>
    <title>Additional info</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "1765160", "webdev");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT * FROM student where id = " . $_GET['id'];
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
echo "<h2>" . $row['fio'] . "</h2><p>His mark:";
echo "" . $row['mark'] . "</p><a href='index.php'> Back to main</a>";
?>
</body>
</html>
