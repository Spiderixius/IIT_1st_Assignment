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
<hr>
<h4>Cat</h4>
<img src="/assets/img/cat.jpg">
<br><br><br>
<hr>
<h4>Planet Earth</h4>
<img src="/assets/img/earth.jpg">
<br><br><br>
<hr>
<h4>Colours!</h4>
<img src="/assets/img/balloon.jpg">
<hr>
<h4>Space</h4>
<img src="/assets/img/space.jpg">
<br><br><br>


<?php require VIEW_DIR . '/footer.php'; ?>
