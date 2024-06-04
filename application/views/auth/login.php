<!DOCTYPE html>
<html lang="en">
<!-- coding by helpme_coder -->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
	<link rel="stylesheet" href="<? echo base_url('assets/css/style.css'); ?>">
	<title>Login Page Admin</title>
</head>

<body>
	<div class="container">
		<div class="box">
			<div class="header">
				<p>Log In</p>
			</div>
			<form class="admin" method="post" action="<?= base_url('C_auth/prosess_login') ?>">

				<div class="input-box">
					<label for="name">username</label>
					<input type="text" name="username" class="input-field" id="name" required>
					<i class="bx bx-envelope"></i>
				</div>
				<div class="input-box">
					<label for="pass">Password</label>
					<input type="password" name="password" class="input-field" id="password" required>
					<i class="bx bx-lock"></i>
				</div>
				<div class="input-box">
					<input type="submit" class="input-submit" value="SIGN IN">
					<!-- <button href="<?= base_url('C_admin'); ?>" class="btn btn-primary btn-user btn-block"> -->
				</div>
				<div class="bottom">
					<span><a href="<?= base_url('C_landingPage'); ?>">Back</a></span>
				</div>
			</form>
		</div>
		<div class="wrapper"></div>
	</div>
</body>

</html>