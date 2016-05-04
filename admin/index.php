<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Teacher's Evaluation System || Sign in Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
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
<div align="center"><font color="#FFFF00" size="+2">ADMINISTRATOR'S LOGIN INTERFACE</font> &nbsp;&nbsp;&nbsp;&nbsp;BY: <font color="#FFFF00"><?php  echo strtoupper("Iweka Ikechukwu Felix"); ?></font> (GOU/12/1445)</div>

    </div>
  </div>
</div>

<div class="sholdmain">
<div class="lineuptext">
  <font size="5" ><strong>Admin Login </strong></font>

</div>
<form name="form1" method="post" action="checklogin.php">
<div class="signinhold">
<div class="uholdsignin"><?php if(isset($msg)) echo $msg; ?></div>
<div class="uholdsignin">Admin Username</div>
<div class="uholdsignin2"><input name="myusername" type="text" id="myusername" class="txtboxcss">
</div>
<div class="uholdsignin">Admin Password</div>
<div class="uholdsignin2"><input name="mypassword" type="password" id="mypassword" class="txtboxcss"></div>
<div class="uhold2"><input type="submit"  class="bluebutton" name="Submit" value="Login"></div></div>
</form>
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