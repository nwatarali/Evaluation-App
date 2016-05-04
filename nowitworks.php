<?php
$con=mysql_connect("localhost", "root","");
if (!$con)
{
	die("Could not connect to Localhost Server.".mysql_error());
}
$condb=mysql_select_db("feedback",$con);
if (!$condb)
{
	echo ("Could not select the Database.".mysql_error());
}
//This section is for obtaining course title using AJAX
$cid = $_GET['courseid'];
$cquery = mysql_query ("SELECT * faculty master join branch_master using (b_id) where b_name = '$dename'");

$rowc = mysql_fetch_array($cquery);

echo $rowc['full_name'];
?>
