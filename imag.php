<?php
include_once('http://areen.dc7.us/New%20folder/confg.php');

$sql2 = "SELECT  DISTINCT student_img  as alias FROM stdinfo   WHERE student_id='" . $_GET['SN1']."'  ";

$result2 = mysql_query("$sql2") or die("Invalid query: " . mysql_error());

header("Content-type: image/jpeg");
echo mysql_result($result2, 0);
?>
