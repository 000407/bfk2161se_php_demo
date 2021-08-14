<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<?php if (isset($_SESSION["user"])): ?>
	<h1>Private area: Only for authenticated users</h1>
	<h2>Hello <?=$_SESSION["user"]["name"]?>!</h2>
	<p><a href="/php_demo/forms/logout.php">Logout</a></p>
	<?php endif?>
	<h1>Public Area</h1>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat congue sem non dictum. Maecenas vitae sollicitudin massa. Integer at nunc eget dui efficitur porttitor. Aliquam ultrices eu felis quis posuere. Fusce sed urna lectus. Fusce facilisis rutrum metus at vestibulum. Donec eu pellentesque elit. Vivamus varius nisi ac diam rhoncus, sit amet bibendum ante iaculis. Donec at fringilla ante. Mauris molestie, quam sit amet hendrerit sollicitudin, quam mauris mattis quam, id rhoncus velit enim sit amet nulla. Ut iaculis nec ante eu mattis. Curabitur ultricies quis orci a dapibus.
	</p>
	<p>
		Sed ultrices lacus eget lacus aliquet, non tempus nulla consectetur. Sed urna enim, venenatis eu dictum nec, eleifend at enim. Nullam a ligula congue, rhoncus nulla sit amet, feugiat erat. Ut dui mi, laoreet nec nunc ut, pulvinar ullamcorper odio. Sed malesuada consequat libero eget interdum. Etiam non blandit arcu. Vivamus pulvinar congue eros, vitae ullamcorper nulla tincidunt facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas gravida nisi eros, et ornare diam pellentesque non. Quisque convallis convallis nisl ac posuere. Aenean a ipsum maximus, efficitur dolor sed, pretium arcu.
	</p>
</body>
</html>