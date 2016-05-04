<?php  
include("includes/config_db.php");

require "dbconnect.php";
include("ajax_script.php");

require "check.php";

if(!isset($user_id))
{
		header("location: index.php");
		
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Teachers Evaluation System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- Featured Slider Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.setup.js"></script>
<!-- End Featured Slider Elements -->
<link rel="stylesheet" type="text/css" href="includes/style.css" />
<style type="text/css">
body {
	background-color: #CFD2D8;
}
</style>
</head>
<body id="top">

<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="header" class="clear">
  <div class="logohold"></div>
    <div class="fl_left">
     <h1><a href="index.php">TEACHER'S EVALUATION SYSTEM</a></h1>
      <p>Godfrey Okoye University Enugu - Final  Year Project - Computer Science <br /><br />

<b><font color="#FFFF66">BY: Nwatarali Cheta Sidney (GOU/12/1443)</font></b></p>
    </div>
    <div class="fl_right">
    <br />

      <p><a href="sign_out.php">Sign Out</a> | <a href="admin/">Staff Login</a></p><br />
<br />
Welcome, <font color="#FFFF66"><?php echo strtoupper($musername);?></font> <?php echo " (". $regno.")"; ?>
    </div>
  </div>
</div>

<div class="sholdregister2">
<div class="signhead">Kindly Submit your Teacher's Evaluation Below</div>
<div class="evaluationhold">
<div class="evmainhold">
<table width="650" height="561"  border="0" align="center" cellpadding="5" cellspacing="5" >
  
  <tr>
    
  </tr>
  <tr>
    <td width="650" height="126" valign=top >
	<form action="submit_feedback.php" method="post" name="feedback_form" onsubmit="return chkForm();">
      
       <table width="711" border="0" align="center"> 
       
       <div class="thold">
       <div class="textehold">Session/Batch:</div>
       <div class="boxehold">
        <?php
			$sel_batch="select * from batch_master";
			$res_batch=mysql_query($sel_batch) or die(mysql_error());
			
			 while($batch_combo=mysql_fetch_array($res_batch))
			 {							
				$bat_combo[] = array('id' => $batch_combo['batch_id'],
									   'text' => $batch_combo['batch_name']);								  
			 }
			 //echo tep_draw_pull_down_menu('batch_name',$bat_combo,$default,' tabindex="2" ');
			
			$sel_para="select * from feedback_para";
			$res_para=mysql_query($sel_para) or die(mysql_error());
			$result_para=mysql_fetch_array($res_para);
			
			?>
            <input type="hidden" name="batch_name" value="<?php echo $result_para['batch_id']?>"/>
			<?php echo batch_name($result_para['batch_id']);?>
       </div>
       <div class="textehold">Department:</div>
       <div class="boxehold">
        <?php
			$sel_b= "select * from branch_master";
			$res=mysql_query($sel_b) or die(mysql_error());
			
			 while($b_combo=mysql_fetch_array($res))
			 {							
				$branch_combo[] = array('id' => $b_combo['b_id'],
									    'text' => $b_combo['b_name']);								  
			 }
			 //echo tep_draw_pull_down_menu('b_name',$branch_combo,$default,' tabindex="3" ');
			?>
            <input type="hidden" name="b_name" value="<?php echo $result_para['b_id']?>"/>
			<?php echo branch_name($result_para['b_id']);?>
           
       </div>
       </div>
       
        <div class="thold">
       <div class="textehold">Semester:</div>
       <div class="boxehold">
         <?php
			 $sel_sem="select * from semester_master ";
			 $res_sem=mysql_query($sel_sem) or die(mysql_error());
			
			 while($sem_combo=mysql_fetch_array($res_sem))
			 {							
				$sem_array[] = array('id' => $sem_combo['sem_id'],
									 'text' => $sem_combo['sem_name']);								  
			 }
			 
			// echo tep_draw_pull_down_menu('sem_name',$sem_array,$default,' tabindex="4" ');
	      ?>
		  <input type="hidden" name="sem_name" value="<?php echo $result_para['sem_id']?>"/>
			<?php echo sem_name($result_para['sem_id']);?>
       </div>
       <div class="textehold"></div>
       <div class="boxehold">
           
       </div>
       </div>
       
        <div class="thold">
       <div class="textehold">Student's Reg. No:</div>
       <div class="boxehold">
        <input type="text" name="roll_no"  value="<?php  echo $regno; ?>" readonly="readonly"/>
       </div>
       <div class="textehold"></div>
       <div class="boxehold">
       
           
       </div>
       </div>
       
        <div class="thold">
       <div class="textehold">Teacher's name</div>
       <div class="boxehold">
       <?php
			$sel_fac= "select * from faculty_master";
			 $res_fac=mysql_query($sel_fac) or die(mysql_error());
			
			 while($fac_combo=mysql_fetch_array($res_fac))
			 {							
				$fac_array[] = array('id' => $fac_combo['f_id'],
									 'text' => $fac_combo['f_name'].'&nbsp;'.$fac_combo['l_name']);								  
			 }
			 $default = 1;
			 echo tep_draw_pull_down_menu('fac_name', $fac_array, $default,' tabindex="5" ');
			 
			/* while($rowsec= mysql_fetch_array($res_fac))
			 {
			$fl_name = $rowsec['full_name'];
				 
			echo  "<option>$fl_name</option>";
			}*/
			 
	      ?>
       </div>
       <div class="textehold"></div>
       <div class="boxehold">
           
       </div>
       </div>
		<tr>
          <td colspan="5" align="center">

<b>Note:</b> Enter Rating from 1 to 9.<br /><br />

<b><font color="#FF0000">KEY/GUIDELINES</font></b><br /><br />


<b>1 &raquo;</b> Not Encouraging; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>2 &raquo;</b> Very Very Poor;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<b>3 &raquo;</b> Very Poor; 
<br />
<b>4 &raquo;</b> Poor; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>5 &raquo;</b> Fair;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>6 &raquo;</b> Good;<br />
 <b>7 &raquo;</b> Very Good; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>8 &raquo;</b> Almost Excellent; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>9 &raquo;</b> Excellent;</td><br />

        </tr>
		<tr>
          <td colspan="2">
		  <table width="100%" id="rounded-corner" cellpadding="10" cellspacing="0" border="0" align="center">
		  <thead>
		  <tr >
		     <th width="8%" class="rounded-company" align="center">ID</th>			 
			 <th width="86%" class="rounded-q1" align="center">Questions</th>
			 <th width="6%" class="rounded-q4">&nbsp;</th>
		  </tr>
		  </thead>
		  <?php
		  	$sql_que="select * from feedback_ques_master";
			$res_que=mysql_query($sql_que) or die(mysql_error());
			$i=1;
			$tab_ind=7;
			while($row_que=mysql_fetch_array($res_que))
			{
				echo "<tr>";
				echo "<td align=\"center\">".$i."</td>";
				echo "<td>".$row_que['ques']."</td>";
				echo "<td><select name=\"ans_$i\">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				</option>0</option>
				</select>
				</td>";$tab_ind++;
				echo "</tr>";$i++;
			}
		  ?>		  
		  <tr>
		  <td>Remarks</td>
		  <td colspan="2"><textarea name="remark" style="width:605px; height:40px;" onkeypress="return isCharOnly(event);" tabindex="16"></textarea></td>
		  </tr>		  
		  	<tr>
				<td colspan="2"  class="rounded-foot-left" align="center"><input class="button" type="submit" name="submit" value="Submit" tabindex="17"/>&nbsp;<input type="reset" name="reset" value="Reset" tabindex="18" class="button"/></td>
				<td align="center" class="rounded-foot-right"></td>
			</tr>			
		  </table>
		  </td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr>
   
  </tr>
  
</table>
</div>
</div>
</div>


<div class="wrapper row4"></div>
<!-- ####################################################################################################### -->
<div class="wrapper row5"></div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="academiclinks" class="clear">
    <div class="linkbox">
      <h2>ACADEMICS</h2>
      <ul>
        <li><a href="#">&raquo; Academic Advisory</a></li>
        <li><a href="#">&raquo; Academic Assistance</a></li>
        <li><a href="#">&raquo; Academic Calendars</a></li>
        <li><a href="#">&raquo; Academics Office</a></li>
        <li><a href="#">&raquo; Administration</a></li>
        <li><a href="#">&raquo; Adult Learners</a></li>
        <li><a href="#">&raquo; Alumni Chapters</a></li>
        <li><a href="#">&raquo; Alumni Events</a></li>
        <li><a href="#">&raquo; Athletics</a></li>
        <li><a href="#">&raquo; Campus Life At a Glance</a></li>
        <li><a href="#">&raquo; Campus Recreation</a></li>
        <li><a href="#">&raquo; Campus Safety &amp; Security</a></li>
      </ul>
    </div>
    <div class="linkbox">
      <h2>COUNSELLING</h2>
      <ul>
        <li><a href="#">&raquo; Class Schedules</a></li>
        <li><a href="#">&raquo; Counselling Center</a></li>
        <li><a href="#">&raquo; Course Descriptions and Catalogue</a></li>
        <li><a href="#">&raquo; Department Directory</a></li>
        <li><a href="#">&raquo; Departments &amp; Programs</a></li>
        <li><a href="#">&raquo; Fellowships</a></li>
        <li><a href="#">&raquo; Finals Schedules</a></li>
        <li><a href="#">&raquo; Financial Aid</a></li>
        <li><a href="#">&raquo; Fitness and Recreation Facilities</a></li>
        <li><a href="#">&raquo; Global Learning</a></li>
        <li><a href="#">&raquo; Graduate</a></li>
        <li><a href="#">&raquo; Graduate Admissions</a></li>
      </ul>
    </div>
    <div class="linkbox">
      <h2>GRADUATES</h2>
      <ul>
        <li><a href="#">&raquo; Graduate Health Services</a></li>
        <li><a href="#">&raquo; Graduate Housing</a></li>
        <li><a href="#">&raquo; Graduate Programs</a></li>
        <li><a href="#">&raquo; Graduate Student Association</a></li>
        <li><a href="#">&raquo; Graduate Studies</a></li>
        <li><a href="#">&raquo; Honours Program</a></li>
        <li><a href="#">&raquo; Interactive Schedule</a></li>
        <li><a href="#">&raquo; International Programs</a></li>
        <li><a href="#">&raquo; International Students</a></li>
        <li><a href="#">&raquo; Intramural Sports</a></li>
        <li><a href="#">&raquo; Language Resources</a></li>
        <li><a href="#">&raquo; Maps and Directions</a></li>
      </ul>
    </div>
    <div class="linkbox last">
      <h2>STAFF/STUDENT </h2>
      <ul>
        <li><a href="#">&raquo; Office of the Registrar</a></li>
        <li><a href="#">&raquo; Online Learning</a></li>
        <li><a href="#">&raquo; Parent Information</a></li>
        <li><a href="#">&raquo; Residence Life</a></li>
        <li><a href="#">&raquo; Residential Colleges</a></li>
        <li><a href="#">&raquo; Schools and Colleges</a></li>
        <li><a href="#">&raquo; Student Activities</a></li>
        <li><a href="#">&raquo; Student Affairs</a></li>
        <li><a href="#">&raquo; Student Development</a></li>
        <li><a href="#">&raquo; Student Financial Services</a></li>
        <li><a href="#">&raquo; Student Group Directory</a></li>
        <li><a href="#">&raquo; Student Life</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
    <div class="fl_left clear">
      <div class="fl_left center"><img src="images/demo/worldmap.gif" alt="" /><br />
        <a href="#">Find Us With Google Maps &raquo;</a></div>
      <address>
      Address Line 1<br />
      Address Line 2<br />
      <br />
      Tel: xxxx xxxx xxxxxx<br />
      Email: <a href="#">info@ebsu.com</a>
      </address>
    </div>
    <div class="fl_right">
      <div id="social" class="clear">
        <p>Stay Up to Date With Whats Happening</p>
        <ul>
          <li><a style="background-position:0 0;" href="#">Twitter</a></li>
          <li><a style="background-position:-72px 0;" href="#">LinkedIn</a></li>
          <li><a style="background-position:-142px 0;" href="#">Facebook</a></li>
          <li><a style="background-position:-212px 0;" href="#">Flickr</a></li>
          <li><a style="background-position:-282px 0;" href="#">RSS</a></li>
        </ul>
      </div>
      <div id="newsletter">
        <form action="#" method="post">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
            <input type="text" id="subscribe" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ####################################################################################################### -->
  </div>
  <div id="copyright" class="clear">
      <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - Godfrey Okoye University, Enugu</p>
      <p class="fl_right">Developed &amp; Powered by: <b><font color="#FFFF66">Nwatarali Cheta Sidney (GOU/12/1443)</font></b></p>
    </div>
</div>
</body>
</html>