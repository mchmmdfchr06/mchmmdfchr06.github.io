<?php 
	require '../koneksi.php';

	$errors = array();
	$info = array();

	if(empty($_POST['id'])){
		$errors['id'] = 'ID tidak ditemukan';
	}

	if (!empty($errors)) {
		$info['success'] = false;
		$info['errors'] = $errors;
	}else{
		$id = $_POST['id'];
		$sql = "DELETE FROM produk WHERE id='$id'";
		$res = mysqli_query($conn, $sql);
		$info['success'] = true;
		$info['message'] = 'Berhasil Dihapus';
	}

	echo json_encode($info);
?>