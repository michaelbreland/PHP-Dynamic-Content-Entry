<?php
	//Start session
	session_start();
	session_destroy();
	//Unset the variables stored in session
	unset($_SESSION['SESS_USERNAME']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<?php include('../header.php'); ?>
<h1>Logout </h1>
<p align="center">&nbsp;</p>
<h4 align="center" class="err">You have been logged out.</h4>
<p align="center">Click here to <a href="login-form.php">Login</a></p>
<?php include('../footer.php') ?>
