<?php include("config.php");
// ob_start();
// $username = $_POST['username'];
// $password = sha1($_POST['password']);

// $query = "SELECT ID FROM user WHERE username = '$username' AND password = '$password'";

// if ($result = $db->query($query)) {
   // while ($user = $result->fetch_object()) {
      // $_SESSION['user'] = $user->ID;
      // header("Location: index.php");
   // }
// }
// else {
   // header("Location: login.php");
// }
// ob_end_flush();
session_start(); 
if ((isset($_SESSION['username']) && 
      $_SESSION['username'] != "") || 
    (isset($_SESSION['password']) && 
      $_SESSION['password'] != "")) {
  //If there is a username and a password that is not null, do nothing.
} else {
  $redirect = base64_encode($_SERVER['PHP_SELF']); //encodes the location of the page
  header("Location: login.php?redirect=$redirect");
  die();
}
$MM_redirectLoginSuccess = "index.php";
$MM_redirectLoginFailed = "login.php";

 if (isset($_SESSION['PrevUrl']) && false) 
	{
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];  
    
    header("Location: " . $MM_redirectLoginSuccess );
	}
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
?>