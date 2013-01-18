 <?php 
	include("functions.php");
	$target_path = $_SERVER['DOCUMENT_ROOT']."/mysite/uploads/";
	$target_path = $target_path . basename( $_FILES['file']['name']);
	$file_location = "/mysite/uploads/".$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $target_path);

	$qry = "INSERT INTO item (name, description, price, link, image) VALUES ('$_POST[name]', '$_POST[description]', '$_POST[price]', '$_POST[link]', '$file_location')";
	$result = mysql_query($qry) or die(mysql_error());
	header("Location: admin.php?uploaded=true");
?>
<?php

if(isset($_POST['submit'])) {
	$target = "mysite/uploads/";
	$file_name = $_FILES['file']['name'];
	$tmp_dir = $_FILES['file']['tmp_name'];

	try
	{
		if(!preg_match('/(gif|jpe?g|png)$/i', $file_name) || 
			!preg_match('/^(image)/', $_FILES['file']['type']) ||
			$_FILES['file']['size'] > 300000) 
		{
			throw new Exception("Not quite, buddy!");
			exit;
		}
		
		move_uploaded_file($tmp_dir, $target . $file_name);
		$status = true;
	}
		
	catch(Exception $e)
		{
			echo $e->getMessage();
		}
		header("Location: admin.php?uploaded=true");
}
?>