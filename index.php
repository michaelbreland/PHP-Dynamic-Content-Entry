<?php include('login/auth.php'); ?>
<?php include('header.php'); ?>

<div style="margin:10px 0px 10px 20px;">
 <a href="login/logout.php">Logout</a> <a href="login/admin.php">Add Item</a>
</div>

<table class='item_list'>

<?php
   $qry = "SELECT * FROM 'item' WHERE 1";
   $result = mysql_query($qry);
   if($result) : while ($item = $result->fetch_object()):
?>

   <tr class='item'>
      <td class='item_image'>
		 <?php
	
			if(isset($status)) {
				$path = $target . $file_name;
				echo "<img width='150' src=\"$path\"/>";
			}
		 ?>
      </td>
      <td class='item_content'>
         <h2 class='item_name'><?php echo $item->name ?></h2>
         <div class='item_description'><?php echo nl2br($item->description) ?></div>
      </td>
      <td class='item_price'>
         <h3>
            <a href='<?php echo $item->link ?>'>
               <span class='price'>$<?php echo number_format($item->price) ?></span>
            </a>
         </h3>
         <a class='text' href='<?php echo $item->link ?>'>Buy This</a>
      </td>
   </tr>

<?php endwhile; endif; ?>
</table>

<?php include('footer.php') ?>