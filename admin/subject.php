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


<table width="57%" align="center"  border="0" cellpadding="0" cellspacing="1">
<?php include('admin_panel_heading.php'); ?>
<tr>
<td width="22%" >
<?php include('left_side.php');?>
</td>

<td width="78%" align="center" valign="top" >
<table align="center" width="100%"><tr><td colspan="3" >
<?php $f_result = mysql_query("SELECT * FROM faculty_master  where f_id='".$_GET['f_id']."'");
		//echo "SELECT * FROM faculty_master  where f_id='".$_POST['f_id']."'";
		$f_myrow = mysql_fetch_array($f_result);
		//print_r($f_myrow);
?>
<tr>
	
	<td align="center"><?php echo $f_myrow['f_name'].'&nbsp;'.$f_myrow['l_name']?>&nbsp;(<?php echo branch_name($f_myrow['b_id'])?>)
	</td>

</table>

<table width="480px">
<tr >
<td align="left" ><a  href="faculty.php" class="button" >Back</a></td>
<td align="right"><a href='add_subject3.php?f_id=<?php echo $_GET['f_id']?>' class="button">Add Subject</a></td>
</tr>
</table>

<table width="100%" id="rounded-corner" border="0" align="center" cellpadding="1" cellspacing="0" >
<thead>
<tr>
	<th align="center" scope="col" class="rounded-company">Id</th>
	<th align="center" scope="col" class="rounded-q1">Subject Name</th>
	<th align="center" scope="col" class="rounded-q1">Semester</th>
	<th align="center" scope="col" class="rounded-q1">Batch</th>
	<th align="center" scope="col" class="rounded-q1">Division</th>
	<th align="center" scope="col" class="rounded-q4">&nbsp;</th>
</tr>
</thead>
<?php


        $result = mysql_query("SELECT * FROM subject_master  where f_id='".$_GET['f_id']."' order by batch_id, sem_id, division_id");
        //lets make a loop and get all news from the database
		$i=1;
		if(mysql_num_rows($result)>0)
		{
			 while($myrow = mysql_fetch_array($result))
			 {//begin of loop
			   //now print the results:
			   echo '<tr>';
			   echo "<td align=center>".$i."</td>";$i++;
			   echo "<td align=center>".$myrow['sub_name']."</td>";
			   echo "<td align=center>".sem_name($myrow['sem_id'])."</td>";
			   echo "<td align=center>".batch_name($myrow['batch_id'])."</td>";
			   echo "<td align=center>".division_name($myrow['division_id'])."</td>";
			   echo "<td align=center>"."<a href=\"edit_subject.php?sub_id=$myrow[sub_id]\">edit</a> /"."<a href=\"delete_subject.php?sub_id=$myrow[sub_id]&f_id=$myrow[f_id]\">delete</a>"."</td>";
			  echo '</tr>';  
			  
			 }//end of loop
		}
		else
		{
			echo '<tr><td colspan=6 align=center>No record found!</td></tr>';
		}
		 
?>
</table>
</td>
</tr>
</table>
</div>
</body>
</html>
