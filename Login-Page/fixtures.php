
<HTML>
<head>
	<title> FIXTURES </title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body bgcolor="#3366cc">

	<?php
$con=mysqli_connect("localhost","root","","project");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM FIXTURES");
echo "<table border='1'align='center'>
<tr>
<th>match no.</th>
<th>date</th>
<th>time</th>
<th>Match</th>
<th>Ground</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Sr_No'] . "</td>";
  echo "<td>" . $row['DATE_OF_Match'] . "</td>";
  echo "<td>" . $row['TIME_OF_match'] . "</td>";
  echo "<td>" . $row['OPPONENTS'] . "</td>";
  echo "<td>" . $row['GROUND'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>
</body>


</HTML>