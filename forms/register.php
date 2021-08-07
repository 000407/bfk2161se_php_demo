<?php
	if (isset($_POST['register']) && $_POST['register'] == "Submit") {
		include_once("handle_reg.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Submit</title>
</head>
<body>
	<?php if (isset($success) && $success):?>
		<script type="text/javascript">
			alert("Successfully saved!");
		</script>
	<?php endif ?>
	<?php if (isset($success) && !$success):?>
		<h4 style="color: red;"><?= $message ?></h4>
	<?php endif ?>
	<form method="post" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
		<p>Name: <input type="text" name="name" placeholder="e.g. John Doe" /></p>
		<p>Password: <input type="password" name="passwd" placeholder="e.g. Pass123@" /></p>
		<p>NIC: <input type="text" name="nic" placeholder="e.g. 199001004500" /></p>
		<p>Age: <input type="text" name="age" placeholder="e.g. 24" /></p>
		<p>Gender: 
			<input type="radio" name="gender" value="m" /> Male
			<input type="radio" name="gender" value="f" /> Female
			<input type="radio" name="gender" value="o" /> Other
		</p>
		<p>Education: 
			<input type="checkbox" name="education[]" value="ol" /> O/L
			<input type="checkbox" name="education[]" value="al" /> A/L
			<input type="checkbox" name="education[]" value="d" /> Diploma
			<input type="checkbox" name="education[]" value="hd" /> Higher Diploma
			<input type="checkbox" name="education[]" value="b" /> Bachelors
			<input type="checkbox" name="education[]" value="pg" /> Post Graduate
		</p>
		<p>Resume: <input type="file" name="resume" />
		<p><input type="submit" name="register" value="Submit" /> <input type="reset" name="reset" value="Clear" /></p>
	</form>
</body>
</html>