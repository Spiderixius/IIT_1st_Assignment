
<?php 
	require VIEW_DIR . '/header.php'; 
?>
<script src="/assets/js/jsScripts.js" type="text/javascript"></script>


<!-- Directs user to the gallery-->
<div class="loginHeader">
	<h1>Login</h1>
</div>

<form id="login_form">
	Username <br>	
		<input type="text" name="username" id="loginName" placeholder="Insert Username" maxlength="100" />
		<br>
	Password <br>
		<input type="password" name="password" id="loginPassword" placeholder="Insert Password" autocomplete="off" maxlength="50" />	
		<br>
		<button type="button" onClick="validateUser()">Login</button>
		<input type="reset" value="Cancel"/> 
</form>

<p id="loginText"></p>

<script>

</script>
 
<?php require VIEW_DIR . '/footer.php'; ?>


