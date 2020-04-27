<html>
<head>
<title>Display into DB</title>
<style type="text/css">
table {
  border: 2px solid red;
    background-color:#FFC;
  }
th {
  border-bottom: 5px solid #000;
  }
td {
  border-bottom: 2px solid #666;
  }
</style>
</head>
<body>

<h1>Display Data from DB</h1>

<?php
include('connect-mysql.php');

$sqlget = "Select * FROM members";
$sqldata = mysqli_query($con, $sqlget) or die ('error getting');

echo "<table>";
echo "<tr><th>Member_ID</th><th>First_Name</th><th>Last_Name</th><tr>";

while($row=mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
  echo "<tr><td>";
  echo $row['Member_ID'];
  echo "</td><td>";
  echo $row['First_Name'];
  echo "</td><td>";
  echo $row['Last_Name'];
  echo"</td></tr>";
}

echo "</table>";

?>

</body>
</html>
