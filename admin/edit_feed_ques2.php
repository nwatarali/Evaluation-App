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
<td width="22%" valign="top">
<?php include('left_side.php');?>
</td>

<td width="78%" align="center" valign="top">


 

<?php if(isset($_POST['submit']))
  {//begin of if($submit).
      // Set global variables to easier names
      
      $q_id = $_GET['q_id'];
	   

		$title = mysql_real_escape_string($_POST['ques']);
		$one_word =mysql_real_escape_string($_POST['one_word']);
			  
		$result = mysql_query("update feedback_ques_master set ques= '$title', one_word= '$one_word' where q_id='$q_id' ") or die(mysql_error());
		
		echo "<b>Question updated Successfully!</b><br>You'll be redirected after (2) Seconds";
        echo "<meta http-equiv=Refresh content=2;url=feed_ques.php>";
		
	
  }//end of if($submit).


  // If the form has not been submitted, display it!
else
  {//begin of else
   $q_id = $_GET['q_id'];
    $result = mysql_query("SELECT * FROM feedback_ques_master WHERE q_id='$q_id' ");
        while($myrow = mysql_fetch_assoc($result))
             {
                $que_name= $myrow["ques"];
				$que_word = $myrow["one_word"];

      ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<input type="hidden" name="q_id" value="<?php echo $myrow['q_id']?>">
<table width="283" border="0" cellpadding="3" cellspacing="1">
<tr><td colspan="2" align="center" style="font-size:20px">Update Evaluation Question</td></tr>
  <tr>
    <td width="92">Que.&nbsp;<?php echo $q_id;?></td>
    <td width="163">
     <textarea name="ques" style="width:250px; height:60px"><?php echo $que_name;?></textarea>
    </td>
  </tr>
  <tr>
    <td width="92">One word</td>
    <td width="163">
     <input type="text" name="one_word" id="id_one_word" value="<?php echo $que_word;?>">
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table border="0" width="100%">
	<tr><td> <input type="submit" name="submit" value="Update" class="button"></td><td align="right"><input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)" class="button" /></td></tr></table>
    </td>
  </tr>
</table>
</form>
    
 <?php }//end of while loop
  }//end of else
?>
<p>&nbsp;</p></td>
</tr>
</table>
</div>
</body>
</html>
<script language="javascript" type="text/javascript">
function isCharOnly(e)
{
	var unicode=e.charCode? e.charCode : e.keyCode
	//if (unicode!=8 && unicode!=9)
	//{ //if the key isn't the backspace key (which we should allow)
		 //disable key press
		if (unicode==45)
			return true;
		if (unicode>48 && unicode<57) //if not a number
			return false
	//}
}
</script>