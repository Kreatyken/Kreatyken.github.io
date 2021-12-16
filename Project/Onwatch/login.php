<?php 
    include_once ('./config/dbconn.php');
	$db = new crud();
    $result=$db->check_usertype();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class='bg-light'>
	<div class="box">
		<form action="" method="POST" class="login">
		<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input">
				<input type="username" placeholder="Username" name="username" required>
			</div>
			<div class="input">
				<input type="password" placeholder="Password" name="password"  required>
			</div>
			<div class="input">
				<button class="btn" type="submit" name="submit">Login</button>
			</div>
			<p>Not admin click <a href="index.php">here</a> </p>
			<div class="hide">
				<input type="hidden" name="usertype" value="#">
			</div>
		</form>
	</div>

</body>
</html>