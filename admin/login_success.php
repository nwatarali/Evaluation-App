<?php
include('session_chk.php');?>
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

<div class="wrapper2">
<div class="allbodyhold">
<table width="64%" align="center" border="0" cellpadding="0" cellspacing="1" >

<tr>
<td width="22%">

<?php include('left_side.php');?></td>

<td width="78%" valign="top">
<p><br/>
Teacher's Evaluation Feedback system:</p>
<p>Structure of the System  </p>
<p>Batch -> Department -> Teacher </p>
<p>So You can Add/Edit/Delete to Session/Batch, Branch, Semester, Division, Teacher & Subject</p>
<p>Example:</p>
<p><ul>
		<li>Session/Batch: August '08  </li><br>
<br>

<li>Department: Maths & Computer Sciences </li><br>
<br>

<li>Teacher (Example): 
  <ul><br />

    <li>Mr. IK Ezugorie</li>
    <li>Engr. H.A. Chineke</li></ul></li><br />

<p>To get the result(graph/excel) click on &quot;<strong>Feedback</strong>&quot; link.  </p>
<p>Feedback Ques: You can change  by editing it.  </p>
<p>Students will rate the Teacher within the range of 1 - 9</p>
<p>Graph will be generated according to the number of student and their rating. on "<b>Feedback</b>" </p>
<p>You can take backup of your database to avoid loss of data.</p></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td valign="top">&nbsp;</td>
</tr>
</table>
</div>
</div>




</div>




<div class="wrapper row4"></div>


<div class="wrapper row5"></div>

<div class="wrapper">
  <div id="academiclinks" class="clear"></div>
</div>

<div class="wrapper">
  <div id="footer" class="clear">

  </div>
  <div id="copyright" class="clear">
      <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - Godfrey Okoye University, Enugu</p>
      <p class="fl_right">Developed &amp; Powered by: <b><font color="#FFFF66">Iweka Ikechukwu Felix (GOU/12/1445)</font></b></p>
  </div>
</div>
</body>
</html>