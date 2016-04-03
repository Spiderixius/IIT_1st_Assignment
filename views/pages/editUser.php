<?php require VIEW_DIR . '/header.php'; ?>
<?php $title = 'Edit User'; ?>

<h1>Edit User: </h1>
<h2><?php echo "ID: " . $_GET['id'] . "<br> User: " . $_GET['username'];?></h2>
<ul>
  <li><a href="gallery">Gallery</a></li>
  <li><a href="userlist">Users</a></li>
  <li><a href="logout">Logout</a></li>
</ul>
<form method="POST" action="/editUser">
	<?php echo '<input type="hidden" name="id" value="'. $_GET["id"] .'"/>'; ?> 
	<label for="username">New Username</label>
    <input id="newusername" type="text" name="newusername" placeholder="Insert Username" maxlength="100" autofocus>
	<br><br>
	<input type="submit" value="Edit User"/> 
	<input type="reset" value="Cancel"/>

</form>

<?php require VIEW_DIR . '/footer.php'; ?>