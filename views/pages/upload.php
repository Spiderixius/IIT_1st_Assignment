<?php require VIEW_DIR . '/header.php'; ?>
<?php $title = 'Upload'; ?>


<h1>Upload an image</h1>
<br>
<ul>
  <li><a href="gallery">Gallery</a></li>
  <li><a href="userlist">Users</a></li>
  <li><a href="logout">Logout</a></li>
  <li><a href="contactform">Contact Me</a></li>
</ul>
<br>

<form method="POST" action="/upload" enctype="multipart/form-data">
	<input type="file" name="filename" accept="image/gif, image/jpeg, image/png">
	<br><br>
	<input type="submit" value="Upload"/>
</form>





<?php require VIEW_DIR . '/footer.php'; ?>