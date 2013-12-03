<?php
/**
 * Created by PhpStorm.
 * User: feel
 * Date: 03.12.13
 * Time: 16:18
 */
$id = $_GET['id'];
$query = "DELETE FROM student WHERE id = " . $id;
$con = mysqli_connect("localhost", "root", "1765160", "webdev");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con, $query);
header("Location: index.php");
die();
?>