 <?php
                   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gits";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 
$sql1="SELECT * FROM tab1";
                   $result = mysqli_query($conn,$sql1);

 

echo "<table border='1'>
<tr>
<th>NAME</th>
<th>AGE</th>
<th>INSTITUTE</th>
</tr>";

 

while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['institute'] . "</td>";
  echo "</tr>";
  }

echo "</table>";
mysqli_close($conn);
                   
?>

