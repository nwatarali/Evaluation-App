<?php  
require_once "dbconnect.php";

if(isset($_POST['sub']))
{
	$reg_no = mysql_real_escape_string($_POST['reg_no']);
	$department = mysql_real_escape_string($_POST['department']);
	$p1 = mysql_real_escape_string($_POST['p1']);
	$p2 = mysql_real_escape_string($_POST['p2']);
	$username = mysql_real_escape_string($_POST['uname']);
	
	
	
			if(!empty($reg_no))
			{
					if($department!="---Select---")
					{
								if(!empty($p1))
								{
									if($p1==$p2)
									{
										if(!empty($username))
										{
										
							$query_get = mysql_query("select * from students");
					while($rowst = mysql_fetch_array($query_get))
	{
		$st_reg = $rowst['reg_no'];
		$st_user = $rowst['username'];
	}
	if($username!=$st_user)
	{
		if($reg_no!=$st_reg)
		{
									
										mysql_query("INSERT INTO students values ('', '$username', '$reg_no', '$p1', '$department')") or die("Could not Insert:" . mysql_error());
										
										$msg = "Registration Successfully Completed";
		}
		else
		$msg = "Student's Registration Number Already Exists";
	}
	else
	$msg = "Student's Username Already Exists";
	
										}
										else
										$msg = "You did not fill in your username";
									}
									else
									$msg = "Two Password Mismatch";
									
								}
								else
								$msg = "The password field is empty";
							
					}
					else
					$msg = "Department Cannot be left Empty or ---Select---";
			
			}
			else
			$msg = "The Reg_no Field is empty";
	
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Teacher's Evaluation System || Registration Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
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
     <h1><a href="index.php">TEACHER'S EVALUATION SYSTEM</a></h1>
      <p>Godfrey Okoye University Enugu - Final  Year Project - Computer Science <br /><br />

<b><font color="#FFFF66">BY: Iweka Ikechukwu Felix (GOU/12/1445)</font></b></p>
    </div>
    <div class="fl_right">
    <br />

      <p><a href="sign_in.php">Student Login</a> | <a href="admin/">Staff Login</a></p>
    </div>
  </div>
</div>

<div class="sholdregister2">
<div class="signhead">Create your Online Teacher's Evaluation System Account</div>
<div class="regholdright">
<div class="lineuptext">Say No to Teacher's/Lecturer's Poor Performance &raquo;&raquo; Register with Us <span class="redblink">&raquo;&raquo;</span></div>
<div class="lineup"><img src="images/godfrey.jpg" width="100%" height="100%" /></div>
</div>
<div class="regholdleft">

<form action="" name="me" enctype="multipart/form-data" method="post">
<div class="urequired">All Fields with (<span class="redcss">*</span>) are required</div>
<div class="uholderror"><?php if(isset($msg)) echo $msg; ?></div>
<div class="formsignhold">
  <div class="uhold"><span class="redcss">*</span> Reg No</div>
<div class="uhold"><input type="text" class="txtb" name="reg_no" size="49" placeholder="GOU/****/****" /></div>
</div>
<div class="formsignhold">
  <div class="uhold">
    <div class="uholddept"><span class="redcss">*</span> Department</div>

<div class="uholddept">
<input  name="department" type="text" value="Maths & Computer Science" size="30" readonly="readonly"/>
</div>


</div>
</div>
<div class="formsignhold">
  <div class="uhold"><span class="redcss">* </span>Username</div>
<div class="uhold"><input type="text" class="txtb" name="uname" size="49" placeholder="Username" /></div>
</div>
<div class="formsignhold">
  <div class="uhold"><span class="redcss">*</span> Password</div>
<div class="uhold"><input type="password" class="txtb" name="p1" size="49" /></div>
</div>

<div class="formsignhold">
<div class="uhold"><span class="redcss">*</span> Confirm your Password</div>
<div class="uhold"><input type="password" class="txtb" name="p2" size="49" /></div>
</div>
<div class="uhold2"><input name="sub" type="submit" class="bluebutton" value="Register" /></div>
</form>
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
      <p class="fl_right">Developed &amp; Powered by: <b><font color="#FFFF66">Iweka Ikechukwu Felix (GOU/12/1445)</font></b></p>
    </div>
</div>
</body>
</html>