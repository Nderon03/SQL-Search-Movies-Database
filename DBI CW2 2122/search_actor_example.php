<html>
<head>
        <title>Nderon Beqiri</title>
        <LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
</head>
<body>
<h1>Actor Search Result</h1>

<?php
$titlesearch = $_GET['actName'];
$db_host = 'mysql.cs.nott.ac.uk';
$db_user = 'psynb8_COMP1004';
$db_pass = 'rV_r516';
$db_name = 'psynb8_COMP1004'; 

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno)  die("failed to connect to database\n</body>\n</html>"); 

$sql="SELECT actID,actName FROM Actor WHERE actName='$titlesearch'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($actID, $actName);
?>

<table width="750" border="1" cellpadding="1" cellspacing="1">
<tr> <th>actID</th> <th>actName</th> </tr>

<?php
while($stmt->fetch()){
  echo "<tr>";
  echo "<td>". htmlentities($actID) ."</td>";
  echo "<td>". htmlentities($actName) ."</td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>
