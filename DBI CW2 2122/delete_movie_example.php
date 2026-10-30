<html>
<head>
        <title>Nderon Beqiri</title>
        <LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
</head>
<body>
<h1>Movie Deleted Result</h1>

<?php
$titlesearch = $_GET['title'];
$db_host = 'mysql.cs.nott.ac.uk';
$db_user = 'psynb8_COMP1004';
$db_pass = 'rV_r516';
$db_name = 'psynb8_COMP1004'; 

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno)  die("failed to connect to database\n</body>\n</html>"); 

$sql="DELETE FROM Movie WHERE title='$titlesearch'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($ID, $Title, $Price, $Year, $Genre );
echo "The movie, $titlesearch has been deleted from the database"
?>
</table>
</body>
</html>


