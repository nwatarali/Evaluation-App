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

<table width="57%" align="center" border="0" cellpadding="0" cellspacing="1" >
<?php include('admin_panel_heading.php'); ?>
<tr>
<td width="22%" valign="top">
<?php include('left_side.php');?>
</td>

<td width="78%" align="center" valign="top" >
<table width="100%" id="rounded-corner" border="0" align="center" >
<thead>
<tr>
	<th width="15%" scope="col" class="rounded-company" align="center">Que Id</th>
	<th width="74%" scope="col" class="rounded-q1" align="center">Question</th>
	<th width="74%" scope="col" class="rounded-q2" align="center">One_word</th>
	<th width="11%" scope="col" class="rounded-q4" align="center">&nbsp;</th>
</tr>
</thead>

<?php

//LAST UPDATE
// 27-09-2007


// load the configuration file.

        //load all news from the database and then OREDER them by newsid
        //you will notice that newlly added news will appeare first.
        //also you can OREDER by (dtime) instaed of (news id)
        $result = mysql_query("SELECT * FROM feedback_ques_master ORDER BY q_id");
        //lets make a loop and get all news from the database
		$i=1;
        while($myrow = mysql_fetch_array($result))
             {//begin of loop
               //now print the results:
			   echo '<tr>';
               echo "<td align=center>".$i."</td>";$i++;
			   echo "<td align=left>".$myrow['ques']."</td>";
			   echo "<td align=left>".$myrow['one_word']."</td>";
               echo "<td align=center>"."<a href=\"edit_feed_ques.php?q_id=$myrow[q_id]\" class=\"button\">edit</a> "."</td>";
               echo '</tr>';  
              //"<!--<a href=\"delete_branch.php?b_id=$myrow[b_id]\">delete</a>-->".
              //echo "<br><a href=\"read_more.php?newsid=$myrow[newsid]\">Read More...</a>
              //  || <a href=\"edit_news.php?newsid=$myrow[newsid]\">Edit</a>
              //   || <a href=\"delete_news.php?newsid=$myrow[newsid]\">Delete</a><br><hr>";
             }//end of loop
?>
</table>
</td>
</tr>
</table>
</div>
</body>
</html>
