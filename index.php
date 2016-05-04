<?php
require_once "dbconnect.php";
require_once "check.php";

if(isset($user_id))
{
	header("location: homemain.php");	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Teacher's Evaluation System </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- Featured Slider Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.setup.js"></script>
<script type="text/javascript" src="digital-display.js"></script>
<!-- End Featured Slider Elements -->
</head>
<body id="top">
<div class="wrapper row1"></div>
<!-- -->
<div class="wrapper row2">
  <div id="header" class="clear">
  <div class="logohold"></div>
    <div class="fl_left">
      <h1><a href="index.php">TEACHER'S EVALUATION SYSTEM</a></h1>
      <p>Godfrey Okoye University Enugu - Final Year Project - Computer Science  <br />
<br />
<b><font color="#FFFF66">BY: Nwatarali Cheta Sidney (GOU/12/1443)</font></b></p>
    </div>
    <div class="fl_right">
    
    <?php if(isset($msginsert)) echo $msginsert; ?>
    <br />

      <p><a href="register.php">Register </a>&nbsp;&nbsp; |&nbsp;&nbsp; <a href="sign_in.php">Student Login</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="admin/index.php">Admin Login</a></p>
      <?php if(isset($msginsert)) echo $msginsert; ?>
    </div>
  </div>
</div>
<strong>
<?php //echo $user_id; ?>
  <?php 
 /* $reqquery = mysql_query("select * from students where stu_id='$user_id'"); 
  while($reqrow = mysql_fetch_array($reqquery))
  {
	  	$s_id = $reqrow['stu_id'];
		$fname = $reqrow['full_name'];
		$reg = $reqrow['reg_no'];
		$fac = $reqrow['faculty'];
		$dep = $reqrow['department'];
		$em = $reqrow['email'];
		$uname = $reqrow['username'];
	 //echo $regno;
  }
 */

  ?>
 </strong>

<div class="sholdregister" id="99">
<div class="signhead">Request for Final Clearance

  <span class="lineuptext">Check and Correct the Correctable fields before Final Clearance Request</span></div>
 <?php
  
  if(isset($_POST['sub']))
  {
	  $queget = mysql_query("select * from request_clearance");
	  while($rowget = mysql_fetch_array($queget))
	  {
		  $sid = $rowget['stu_id'];
		  $sreg = $rowget['reg_no'];
	  }
	  
	  if($sreg!=$reg)
	  {
		  if($sid!=$s_id)
		  {
	mysql_query("INSERT INTO request_clearance values('', '$user_id', '$fname', '$reg', '$fac', '$dep', '$em', '', '', '', '', '', '', 'now()')") or die("Could not Insert ".mysql_error());
	$msginsert = "Clearance Request Submitted for Activation and Processing";
		  }
		  else
		  $msginsert = "You Cannot Duplicate Clearance Entry with the Same Registration Number";
	  }
	  else
	  $msginsert = "You Cannot Duplicate Clearance Entry with the Same Registration Number";
		
	  }
  
  ?>
<div class="regholdleftrequest">
  
  <form action="" name="me" enctype="multipart/form-data" method="post">
    <div class="formsignhold1">
  <div class="uhold">Full Name (<span class="blue12bold">Surname first</span>)</div>
<div class="uhold">
<input type="text" class="txtb" size="75"  value = "<?php echo stripslashes($fname. $s_id); ?>"/>
</div>
</div>
<div class="formsignhold">
<div class="uhold">Reg No</div>
<div class="uhold"><input type="text" class="txtb2" size="63" readonly="readonly"  value = "<?php echo stripslashes($reg); ?>"/></div>
</div>
<div class="formsignhold">
<div class="uhold"> Faculty</div>
<div class="uhold">
<input type="text" class="txtb" size="75"  value = "<?php echo stripslashes($fac); ?>"/>
</div>
<div class="formsignhold">
 <div class="uhold">Department</div>

<div class="uhold"><input type="text" class="txtb" size="75"  value = "<?php echo stripslashes($dep); ?>"/></div>
</div>
</div>
<div class="formsignhold">
<div class="uhold"> Email</div>
<div class="uhold"><input type="text" class="txtb" size="75"  value = "<?php echo stripslashes($em); ?>" />
</div>
</div>
<div class="formsignhold">
<div class="uhold">Username</div>
<div class="uhold"><input type="text" class="txtb2" size="41" readonly="readonly"  value = "<?php echo stripslashes($uname); ?>"/></div>
</div>

<div class="uhold2"><input name="sub" type="submit" class="bluebutton" value="Request for Clearance" /></div>
</form>
</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">

  <div class="blue12bold" id="featured_slide_">
    <ul id="featured_slide_Content">
      <li class="featured_slide_Image"><a href="#"><img src="images/demo/1.jpg" alt=""  width="100%" height="100%"/></a>
        <div class="introtext">
          <h2><span class="blue12bold">&laquo;</span><b> Godfrey Okoye University</b> <span class="blue12bold">&raquo;</span> </h2>
          
          <p>
          Godfrey Okoye University was founded in 2008 by Very Reverend Father Professor Dr. Christian Aniekwe for the Catholic Diocese of Enugu. 
          <br />
<br />
The University comprises of four faculties;  <br />
Faculty of management and Social Sciences<br />
Faculty of Natural and Applies Sciences<br />
Faculty of Education and <br />
Faculty of Arts
</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/demo/2.jpg" alt="" /></a>
        <div class="introtext">
          <h2><span class="blue12bold">&laquo;</span> <b>Teacher's Evaluation</b> <span class="blue12bold">&raquo;</span> </h2>
          <p>
          The modernization of teacher evaluation systems, an increasingly common component of school reform efforts, promises to reveal new, systematic information about the performance of individual classroom teachers. 
          <br /><br />

By contrast, very little is known about how the availability of new information, or the experience of being evaluated, might change teacher effort and effectiveness.
</p>
        </div>
      </li>
      
      <li class="clear featured_slide_Image">
        <!-- Important - Leave This Empty -->
      </li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
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
      Email: <a href="#">info@goteachersevaluation.com</a>
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
            <input type="submit"  id="subscribe" value="Submit" />
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