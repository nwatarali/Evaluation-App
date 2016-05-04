<?php
include('session_chk.php');
  include("includes/config_db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Teacher's Evaluation System || Sign in Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="../includes/style.css" />
<!-- Featured Slider Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.setup.js"></script>
<!-- End Featured Slider Elements -->
<style type="text/css">
body {
	background-color: #CFD2D8;
}
</style>
</head>
<body id="top">
<div class="wrapper row1"></div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="header" class="clear">
  <div class="logohold"></div>
    <div class="fl_left">
      <h1><a href="index.php"><font color="#FFF">TEACHER'S EVALUATION SYSTEM</font></a></h1>
      <br />
<br />
<div align="center"><font color="#FFFF00" size="+2">ADMINISTRATOR'S MAIN MENU INTERFACE</font> &nbsp;&nbsp;&nbsp;&nbsp;BY: <font color="#FFFF00"><?php  echo strtoupper("Iweka Ikechukwu Felix"); ?></font></div>

    </div>
  </div>
</div>


<div class="adminmahold">
<table width="57%" align="center" border="0" cellpadding="0" cellspacing="1">
<?php include('admin_panel_heading.php'); ?>
<tr>
<td width="22%" bgcolor="#FFFFFF">
<?php include('left_side.php');?>
</td>

<td width="78%" align="center" valign="top">
<table id="rounded-corner" align="center">
<thead>
<tr>
	<th scope="col" class="rounded-company" align="center">Session/Batch Name </th>
	<th scope="col" class="rounded-q1" align="center">Department Name</th>
	<th scope="col" class="rounded-q2" align="center">Semester</th>
	<th scope="col" class="rounded-q2" align="center">Division</th>
	<th scope="col" class="rounded-q4" align="center">&nbsp;</th>
</tr>
</thead>

<?php


        $result = mysql_query("SELECT * FROM feedback_para");
        //lets make a loop and get all news from the database
		$i=1;
		if(mysql_num_rows($result)>0)
		{
			while($myrow = mysql_fetch_array($result))
			{
			   //begin of loop
			   //now print the results:
			   echo '<tr>';
			   //echo "<td align=center>".$i."</td>";$i++;
			   echo "<td align=center>".batch_name($myrow['batch_id'])."</td>";
			   echo "<td align=center>".branch_name($myrow['b_id'])."</td>";
			   echo "<td align=center>".sem_name($myrow['sem_id'])."</td>";
			   echo "<td align=center>".division_name($myrow['division_id'])."</td>";
			   echo "<td align=center>"."<a href=\"edit_admin_para.php?para_id=$myrow[para_id]\" class=\"button\">edit</a> <!--/"."<a href=\"delete_batch.php?batch_id=$myrow[batch_id]\">delete</a>-->"."</td>";
			   echo '</tr>';  
			  
			  //echo "<br><a href=\"read_more.php?newsid=$myrow[newsid]\">Read More...</a>
			  //  || <a href=\"edit_news.php?newsid=$myrow[newsid]\">Edit</a>
			  //   || <a href=\"delete_news.php?newsid=$myrow[newsid]\">Delete</a><br><hr>";
			}//end of loop
		}
		else
		{
			echo '<tr><td colspan=4 align=center>No record found!</td></tr>';
		}
?>
</table>
</td>
</tr>
</table></div>
</body>
</html>
