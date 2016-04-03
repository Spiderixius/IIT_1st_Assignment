<?php require VIEW_DIR . '/header.php'; ?>

<h1>Gallery</h1>
<br>
<h3>Welcome <?php echo $_SESSION['username']?></h3>
<ul>
  <li><a href="/gallery">Gallery</a></li>
  <li><a href="/userlist">Users</a></li>
  <li><a href="/showUpload">Upload Image</a></li>  
  <li><a href="/logout">Logout</a></li>
</ul>
<br>

<?php> 

	foreach ($variable as $key => $value) {
		# code...
	}

?>

<br><br><br>


<?php require VIEW_DIR . '/footer.php'; ?>
