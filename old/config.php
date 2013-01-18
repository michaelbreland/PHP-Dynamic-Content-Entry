<?php
session_start();
//$db = new mysqli("localhost", "db_username", "db_password", "db_name");

$host="localhost"; // Host name 
$username="mbreland"; // Mysql username 
$password="goldie"; // Mysql password 
$db_name=""; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
//$username=$_POST['username']; 
//$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

$_SESSION['username'] = $username;

if(isset($_SESSION['username'])){
    // do something if the variable is set
    echo $_SESSION['username'];
}
?>