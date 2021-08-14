<?php
	session_start(); // Should be invoked as the first statement whenever/whereever you handle sessions
	if (isset($_SESSION["user"])) {
		header("Location: home.php?login=success");
	}
	if (isset($_POST['login']) && $_POST['login'] == "Login") {
		include_once("handle_auth.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php if (isset($success) && !$success):?>
		<h4 style="color: red;"><?= $message ?></h4>
	<?php endif ?>
	<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
		<p>NIC: <input type="text" name="nic" placeholder="e.g. John Doe" /></p>
		<p>Password: <input type="password" name="password" placeholder="e.g. Pass123@" /></p>
		<p><input type="submit" name="login" value="Login" /></p>
	</form>
</body>
</html>