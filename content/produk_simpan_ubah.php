<?php 
	require '../koneksi.php';

	$errors = array();
	$info	= array();

	if (empty($_POST['txtNama'])) 
		$errors['nama'] = 'Nama Produk belum diisi';
	if (empty($_POST['txtKat'])) 
		$errors['kategori'] = 'Kategori  belum dipilih';
	if (empty($_POST['txtStok'])) 
		$errors['stok'] = 'Stok  belum diisi';

	if (!empty($errors)) {
		$info['success'] = false;
		$info['errors'] = $errors;
	}else{
		$data = array(
			'kat_id' => $_POST['txtKat'],
			'nama_produk'=> $_POST['txtNama'],
			'stok' => $_POST['txtStok']
		);		
		$where = $_POST['txtId'];
		$cols = array();
		foreach ($data as $key => $value) {
			$cols[] = "$key = '$value'";
		}

		$sql = "UPDATE produk SET ". implode(',', $cols)." WHERE id=".$where;
		mysqli_query($conn, $sql);
		$info['success'] = true;
		$info['message'] = 'Berhasil Diubah';
	}

	echo json_encode($info);
?>