<?php
$con = mysqli_connect("localhost", "root", "1765160", "webdev");

// Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $query = "SELECT * FROM student";
  $result = mysqli_query($con,$query);

echo "<h2>List of students</h2>
   <p> If you want to get additional info - click the link :)
   </p>";
echo "<table>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo '<td><a href="student.php?id=' . $row['id'] . '">' . $row['fio'] . '</a> </td><td>  <a href="remove.php?id=' . $row['id'] . '"> remove</a></td>';
    echo "</tr>";
}
echo "</table>";
echo "<p>Admin section:
    <a href=\"add.php\"> add student</a> </p>";

mysqli_close($con);

?>