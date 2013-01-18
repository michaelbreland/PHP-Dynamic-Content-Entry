<?php include('auth.php'); ?>
<?php include('../header.php'); ?>

<div style="margin:10px 0px 10px 20px;">
 <a href="../index.php">Post List</a>
</div>
<form id="uploadform" method="POST" action="script-additem.php" enctype="multipart/form-data">
   <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
   <h1>Add an Item</h1>

   <label for="name">name</label>
   <input id="name" name="name" type="text" />

   <label for="description">description</label>
   <textarea id="description" name="description"></textarea>

   <label for="link">link</label>
   <input id="link" name="link" type="text" />

   <label for="price">price</label>
   <input id="price" name="price" type="text" />

   <label for="image">image</label>
   <input id="file" name="file" type="file" />

   <input type="submit" name="submit" class="submit" value="add item" />

</form>
	
<?php include('../footer.php') ?>
