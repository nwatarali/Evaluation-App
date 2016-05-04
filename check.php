<?php  

if(isset($_COOKIE['member_id']))
{
	$user_id = $_COOKIE['member_id'];
	
	$querycheck = mysql_query("SELECT username, department, reg_no FROM students where stu_id = $user_id", $link) or die (mysql_error()." Could not Select");	
	
	$rowquerycheck = mysql_fetch_array($querycheck);
	
	$musername = $rowquerycheck['username'];
	
	$regno = $rowquerycheck['reg_no'];
	
	$deptm = $rowquerycheck['department'];
	
}

?>