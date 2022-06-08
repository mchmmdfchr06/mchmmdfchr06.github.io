<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Masuk</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body class="text-center">
	<form class="form-signin" action="cek_login.php" method="POST" autocomplete="off">
		<h1 class="h3 mb-3 fw-normal">Silahkan Masuk</h1>

		<div class="form-floating">
			<input type="text" name="txtUser" class="form-control" id="floatingInput" placeholder="Masukkan Username" required="required">
			<label for="floatingInput">Username</label>
		</div>	

		<div class="form-floating">
			<input type="password" name="txtPassword" class="form-control" id="floatingInput" placeholder="Masukkan Password" required="required">
			<label for="floatingInput">Password</label>
		</div>

		<label>Level</label>
		<select name="txtLevel" id="" required="required" class="form-control custom-select">
			<option value="">Pilih</option>
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select>
		<button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
	</form>
</body>
</html>