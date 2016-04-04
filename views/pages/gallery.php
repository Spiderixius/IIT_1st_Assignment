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

<table id="images">
<?php 

	require CONTROLLER_DIR . '/dbConnecterController.php';

    $statement = $db->prepare("SELECT * FROM images ");
	// Execute the query
	$statement->execute();	
	
	while($row = $statement->fetch(PDO::FETCH_ASSOC)){
		echo '<div class="imgrespons">';
		echo '<div class="img">';
		echo '<h4>Title: </label> '. $row['title'].' </h4>';

		echo '<img src="data:image;base64,'.$row['img'].' " alt="'.$row['title'].'" width="150" height="150"><br>';
		
	
		echo '<form action="delete_image" method="post">';
			echo '<input type="hidden" name="id" value="'. $row['id'] .'"/>';
			echo '<button type="submit">Delete Image</button><br><br>';
			echo '________________________________________________________________<br><br>';
		echo '</form>';
		
		echo '</div></div>';
	}
?>
</table>

<br><br><br>


<?php require VIEW_DIR . '/footer.php'; ?>
