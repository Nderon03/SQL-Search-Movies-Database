<html>
<head>
        <title>Nderon Beqiri</title>
        <LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
</head>
<body>
<h1></h1>

<?php
$title = $_GET['movieAdd'];
$genre = $_GET['genreAdd'];
$price = $_GET['priceAdd'];
$actId = $_GET['actorIDAdd'];

$db_host = 'mysql.cs.nott.ac.uk';
$db_user = 'psynb8_COMP1004';
$db_pass = 'rV_r516';
$db_name = 'psynb8_COMP1004';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno)  die("failed to connect to database\n</body>\n</html>");

$sql="INSERT INTO Movie(actID,price,title,genre) VALUES ($actId,$price,'$title','$genre')";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($mvID,$actId,$year,$price, $title, $genre );
echo "You have successfully added $title to your Movie Database";
?>


</table>
</body>
</html>