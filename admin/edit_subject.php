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
<?php
if(isset($_POST['submit']))
  {//begin of if($submit).
      // Set global variables to easier names
      
    //check duplication
	$dup="select * from  subject_master where sub_name='".$_POST['sub_name']."' and sem_id!=".$_POST['sem_name']." and f_id=".$_POST['f_id'];
	//echo $dup;
	//exit;
	$dup_res=mysql_query($dup) or die(mysql_error());
	if(mysql_num_rows($dup_res)==1)
	{
		echo "Subject name is already available in database.";
		echo "<br/><input type=\"button\" name=\"Back\" value=\"Back\"  onclick=\"javascript: history.go(-1)\" />";
		//header("Location:add_branch.php");
		//exit;
	}
	else
	{
     	$sub_id = $_POST['sub_id'];
	    $f_id = $_POST['f_id'];
		$sub_name = $_POST['sub_name'];
		$batch_id =  $_POST['batch_name'];
		
		$result = mysql_query("UPDATE  subject_master  SET sub_name='".$_POST['sub_name']."' , sem_id='".$_POST['sem_name']."' , f_id='".$_POST['f_id']."', batch_id='".$_POST['batch_name']."', division_id='".$_POST['division']."' WHERE sub_id='$sub_id'");
		
		echo "<b>Subject detail is updated successfully!</b><br>You'll be redirected after (1) Seconds";
          echo "<meta http-equiv=Refresh content=1;url=subject.php?f_id=".$f_id.">";
		
	}
  }//end of if($submit).


  // If the form has not been submitted, display it!
else
  {//begin of else
        $sub_id = $_GET['sub_id'];
        //$result = mysql_query("SELECT * FROM  subject_master WHERE sub_id='$sub_id' ");
		
		$sub_result = mysql_query("SELECT * FROM subject_master  where sub_id='".$_GET['sub_id']."'");
		//echo "SELECT * FROM faculty_master  where f_id='".$_POST['f_id']."'";
		
		//print_r($f_myrow);
        while($sub_myrow = mysql_fetch_array($sub_result))
         {
      ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="update_sub" onsubmit="return chkForm();">
<input type="hidden" name="sub_id" value="<?php echo $_GET['sub_id']?>">
<table width="283" border="0" cellpadding="3" cellspacing="1">
<tr><td colspan="2" align="center" style="font-size:20px">Update Subject</td></tr>
  <tr>
  <?php $f_result = mysql_query("SELECT * FROM faculty_master where f_id='".$sub_myrow['f_id']."'");
		$f_myrow = mysql_fetch_array($f_result);
		//print_r($f_myrow);
?>
	
    <td width="132" colspan="2" align="left"><?php echo $f_myrow['f_name'].'&nbsp;'.$f_myrow['l_name']?>&nbsp;(<?php echo branch_name($f_myrow['b_id'])?>)<input type="hidden" name="f_id" value="<?php echo $sub_myrow['f_id']?>"></td>
  </tr>
  
  <tr>
    <td width="92"><div align="left">Subject Name</div></td>
    <td width="163"><label>
      <div align="left">
        <input type="text" name="sub_name" onkeypress="return isCharOnly(event);" value="<?php echo $sub_myrow["sub_name"]?>"/>
        </div>
    </label></td>
  </tr>
  <tr>
    <td width="92"><div align="left">Semester</div></td>
    <td width="163">
	  <div align="left">
	    <?php $sel_sem="select * from semester_master ";
	 $res_sem=mysql_query($sel_sem) or die(mysql_error());
	
	 while($sem_combo=mysql_fetch_array($res_sem))
	 {							
		$sem_array[] = array('id' => $sem_combo['sem_id'],
							  'text' => $sem_combo['sem_name']);								  
	 }
	 $default=$sub_myrow['sem_id'];
	 echo tep_draw_pull_down_menu('sem_name',$sem_array, $sub_myrow['sem_id'], $sub_myrow["sem_id"]);
	?>
	    </div></td>
  </tr>
  <tr>
    <td width="92"><div align="left">Batch</div></td>
    <td width="163">
	  <div align="left">
	    <?php $sel_batch="select * from batch_master ";
	 $res_batch=mysql_query($sel_batch) or die(mysql_error());
	
	 while($batch_combo=mysql_fetch_array($res_batch))
	 {							
		$batch_array[] = array('id' => $batch_combo['batch_id'],
							  'text' => $batch_combo['batch_name']);								  
	 }
	 $default=$sub_myrow['batch_id'];
	 echo tep_draw_pull_down_menu('batch_name',$batch_array, $default, $sub_myrow["batch_id"]);
	 
	// echo tep_draw_pull_down_menu('batch_name',$batch_array,$sub_myrow["batch_id"]);
	 //echo tep_draw_pull_down_menu('batch_name',$batch_array,$default);
	?>
	    </div></td>
  </tr>
  <tr>
    <td width="92"><div align="left">Division</div></td>
    <td width="163">
	  <div align="left">
	    <?php $sel_division="select * from division_master ";
	 $res_division=mysql_query($sel_division) or die(mysql_error());
	
	 while($division_combo=mysql_fetch_array($res_division))
	 {							
		$division_array[] = array('id' => $division_combo['id'],
							      'text' => $division_combo['division']);								  
	 }
	 $default=$sub_myrow['division_id'];
	 echo tep_draw_pull_down_menu('division',$division_array, $default, $sub_myrow["division_id"]);
	?>
	    </div></td>
  </tr>
  <tr>
    <td><div align="left"></div></td>
    <td><div align="left">
      <table border="0" width="100%">
        <tr><td> <input type="submit" class="button" name="submit" value="Update"></td><td align="right"><input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)" class="button" /></td></tr>
      </table>
    </div></td>
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
function chkForm(form)
{

		var RefForm = document.update_sub;
		
		if (RefForm.sub_name.value.length < 1 )
		{
			alert("Enter Subject Name");			
			RefForm.sub_name.focus();
			return false;
		}
		
		if (RefForm.sem_name.value == 0 )
		{
			alert("Select Semester");	
			RefForm.sem_name.focus();		
			return false;
		}
		if (RefForm.batch_name.value == 0 )
		{
			alert("Select Batch");	
			RefForm.batch_name.focus();		
			return false;
		}
}
</script>