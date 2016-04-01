
<?php 
	require VIEW_DIR . '/header.php'; 
?>


<!-- Directs user to the gallery-->
<div class="loginHeader">
	<h1>Login</h1>
</div>

<form id="login_form" method="POST" action="/login">
	Username <br>	
		<input type="text" name="username" id="loginName" placeholder="Insert Username" maxlength="100" />
		<br>
	Password <br>
		<input type="password" name="password" id="loginPassword" placeholder="Insert Password" autocomplete="off" maxlength="50" />	
		<br>
		<input type="submit" id="submitButton" value="Login" /> 
		<input type="reset" value="Cancel"/> 
</form>

<script>

</script>
 
<?php require VIEW_DIR . '/footer.php'; ?>


