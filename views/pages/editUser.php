<?php require VIEW_DIR . '/header.php'; ?>
<?php $title = 'Edit User'; ?>

<h1>Edit User:</h1>
<ul>
  <li><a href="gallery">Gallery</a></li>
  <li><a href="userlist">Users</a></li>
  <li><a href="logout">Logout</a></li>
  <li><a href="contactform">Contact Me</a></li>
</ul>
<form method="POST" action="/editUser">
	Username <br>
		<input type="text" name="username" id="loginName" placeholder="Insert Username" maxlength="100" />
		<br>
	Password<br>
	<input type="password" name="password" id="loginPassword" placeholder="Insert Password" autocomplete="off" maxlength="50" />
	<br>
		<input type="submit" value="Edit User"/> 
		<input type="reset" value="Cancel"/>

</form>

<?php require VIEW_DIR . '/footer.php'; ?>