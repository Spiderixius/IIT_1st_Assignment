<?php require VIEW_DIR . '/header.php'; ?>
<?php $title = 'Upload'; ?>


<h1>Upload an image</h1>
<br>
<ul>
  <li><a href="gallery">Gallery</a></li>
  <li><a href="userList">Users</a></li>
  <li><a href="/">Home</a></li>
  <li><a href="contactform">Contact Me</a></li>
</ul>
<br>
<form>
	<input type="file" name="filename" accept="image/gif, image/jpeg, image/png">
</form>
	<form method="POST" action="gallery">
	<input type="submit" value="Upload"/>
</form>


<?php require VIEW_DIR . '/footer.php'; ?>