<?php 

if (isset($_SESSION['name']))
{
	session_start();
	$_SESSION['name'];
	session_destroy();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style type="text/css">
<!--
a:link {
color:#444444;
text-decoration:none;
}
a:active {
color:#444444;
text-decoration:none;
}
a:visited {
color:#444444;
text-decoration:none;
}
a:hover {
color:#cc0000;
}
.style1 {font-size: 10px;}
.style2 {color: #990000}
-->
</style>
</head>
<body bgcolor="#000000" style="font-family:verdana; font-size:12px">
<table width="50%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" height="100%" align="center" style="margin-top:100px">
  <tr>
    <td align="center" style="padding-top:10px; padding-bottom:10px"><img src="images/logo.jpg" alt="logo" /></td>
  </tr>
  <tr bgcolor="#990000" style="margin-top:10px; margin-bottom:10px">
  <td align="left" width="50%" style="padding-left:15px">
	<br />
  </td>
 
  </tr>
  <tr>
    <td align="center" colspan="2"><br><br>



<?php 

echo '
<div align="center" style="border:solid 1px; width:40%">
  <div align = "center" style="background-color:#edeada; padding:3px"><strong>Login</strong></div>
  <form method="POST" action="validate_input1.php" align = "center">
  <p><label>Username <input type="text" name="user" size="30" /></label></p>
   <p><label>Password <input type="password" name="pass" size="30" /></label></p>
  <input type="submit" size="30" value="Sign In" />
   </form>
		  </div><br><br>';
	
include('footer.php'); 
	
?>