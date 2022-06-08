<?php 
require 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Utama</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/navbar-top-fixed.css">
	<style type="text/css">
		body{
			padding-top: 75px;
		}
	</style>
</head>
<body>
	<?php require 'nav.php'; ?>
	<div class="container">
		<?php 
			if (isset($_GET['page'])) {
				$page = isset($_GET['page']) ? $_GET['page'] : "";
				if ($page == 'home') 
				{
					require 'content/home.php';
				}
				elseif ($page == 'kategori') {
					require 'content/kategori.php';
				}elseif ($page == 'produk') {
					require 'content/produk.php';
				}elseif ($page == 'users') {
					require 'content/user_data.php';
				}
				else{
					echo "<h2>File tidak tersedia di folder</h2>";
				}
			}
		?>
	</div>
	<?php require 'nav.php'; ?>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>