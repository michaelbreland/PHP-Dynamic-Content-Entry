<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Michael Breland - Web Developer</title>

      <!-- Style sheets -->
      <link href='/mysite/styles.css' rel='stylesheet' type='text/css'>
	  <link href='http://fonts.googleapis.com/css?family=Mountains+of+Christmas:700' rel='stylesheet' type='text/css'>
	  <script language="Javascript">

			function validate()
			{
			  username=document.loginForm.username.value;
			  if (username == "" || username == null || username.charAt(0) == ' ')
			  {
				alert("Please enter your Username")
				document.loginForm.username.focus();
				return false;
			  }
			  else
				{
				password=document.loginForm.password.value;

				if (password == "" || password == null || password.charAt(0) == ' ')
				{
					alert("Password cannot be blank")
					document.loginForm.password.focus();
					return false;
				}

				}
			}

	  </script>
   </head>
   <body>
	<?php include("login/config.php");?>
	
      <div id="site_header">
         <div id="site_logo"></div>
         <h1>Michael Breland - Web Developer</h1>
         <div class="clear"></div>
      </div>

      <div id="site_container">