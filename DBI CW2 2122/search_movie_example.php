<html>
<head>
        <title>Nderon Beqiri</title>
        <LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
</head>
<body>
<h1>Movie Search Result</h1>

<?php
$titlesearch = $_GET['title'];
$db_host = 'mysql.cs.nott.ac.uk';
$db_user = 'psynb8_COMP1004';
$db_pass = 'rV_r516';
$db_name = 'psynb8_COMP1004'; 

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno)  die("failed to connect to database\n</body>\n</html>"); 

$sql="SELECT mvID,title,price,year,genre FROM Movie WHERE title='$titlesearch'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($ID, $Title, $Price, $Year, $Genre );
?>

<table width="750" border="1" cellpadding="1" cellspacing="1">
<tr> <th>ID</th> <th>Title</th> <th>Price</th> <th>Year</th> <th>Genre</th> </tr>

<?php
while($stmt->fetch()){
  echo "<tr>";
  echo "<td>". htmlentities($ID) ."</td>";
  echo "<td>". htmlentities($Title) ."</td>";
  echo "<td>". htmlentities($Price) ."</td>";
  echo "<td>". htmlentities($Year) ."</td>";
  echo "<td>". htmlentities($Genre) ."</td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>


