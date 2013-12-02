<form action="index.php" method="POST">
Login:<input type="text" name="login">
Passw:<input type="password" name="pass">	
<input type="submit">
</form>
<?php
  /*$con=mysqli_connect("localhost","root","1765160","webdev");

// Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $query = "SELECT * FROM student";
  $result = mysqli_query($con,$query);

  echo "<table border='1'>
	<tr>
	<th>Id</th>
	<th>FIO</th>
	<th>Mark</th>
  </tr>";

  while($row = mysqli_fetch_array($result))
  {
  
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['fio'] . "</td>";
  echo "<td>" . $row['mark'] . "</td>";
  echo "</tr>";
  }
  mysqli_close($con);*/
if (isset($_POST['login']) && isset($_POST['pass'])) {
	# code...
	echo "<p>".$_POST['login'].":".$_POST['pass'];
    print($)
}
?>