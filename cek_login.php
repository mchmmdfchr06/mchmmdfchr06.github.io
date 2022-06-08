<?php 

require 'koneksi.php';

try {
	$username   = $_POST['txtUser'];
	$password   = $_POST['txtPassword'];
	$level      = $_POST['txtLevel'];

	$cek = "SELECT * FROM users WHERE username ='$username' AND password ='$password' AND level ='$level'";
	$hasil = mysqli_query($conn, $cek);
	$data = mysqli_num_rows($hasil);

	if ($data > 0 ) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['level'] = $level;
		header('location:index.php');
	}else{?>
		<?php echo "<h3> DATA ANDA TIDAK VALID</h3>"; ?>
		<a href="login.php">LOGIN</a>
		<?php exit();
	}
} catch (Exception $e) {
	die("ADA KESALAHAN " . $conn->connect_error);
}
 ?>