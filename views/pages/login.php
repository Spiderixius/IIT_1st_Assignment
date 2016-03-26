<?php require VIEW_DIR . '/header.php'; ?>
<?php $title = 'Login';

?>

<div class="loginHeader">
	<h1>Login</h1>
</div>
<form method="POST" action="gallery.html">
	Username <br>
		<input type="text" name="userID"/>
		<br>
	Password <br>
		<input type="password" name="pswrd"/>
		<br>
		<input type="submit" value="Login"/> 
		<input type="reset" value="Cancel"/> 
</form>

<?php require VIEW_DIR . '/footer.php'; ?>