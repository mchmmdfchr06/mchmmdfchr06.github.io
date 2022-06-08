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

		$key = array_keys($data);
		$val = array_values($data);
		$sql = "INSERT INTO produk (".implode(',', $key).")" ." VALUES('".implode("','", $val)."') ";
		mysqli_query($conn, $sql);
		$info['success'] = true;
		$info['message'] = 'Berhasil Disimpan';
	}

	echo json_encode($info);