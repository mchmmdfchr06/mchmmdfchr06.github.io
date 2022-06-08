<h3>Kategori</h3>

<div class="mb-3">
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kategori">Tambah</button>
</div>

<table class="table table-stripped">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th>Nama Kategori</th>
			<th width="13%">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$sql	= "SELECT * FROM kategori";
		$data 	= mysqli_query($conn, $sql);
		$no 	= (int)1;
		foreach ($data as $rows): ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $rows['nama_kategori']; ?></td>
				<td>
					<a class="btn btn-warning btn-sm" href="javascript:void(0)" onclick="ganti(<?php echo $rows['id']; ?>)">Ubah</a>
					<a class="btn btn-danger btn-sm" href="javascript:void(0)" onclick="hapus(<?php echo $rows['id']; ?>)">Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kategori</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form id="form_kategori">
      		<label for="">Nama Kategori</label>
	        <input type="text" name="txtNama" id="nama" class="form-control" placeholder="Nama Kategori">
	        <input type="hidden" name="txtId">	
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" id="save" class="btn btn-primary" onclick="simpan()">Simpan</button>
        <button type="button" id="update" class="btn btn-warning" disabled="disabled" onclick="ubah()">Ubah</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	function simpan() {
		$.ajax({
			url			: 'content/kategori_simpan.php',
			type 		: 'POST',
			dataType	: 'JSON',
			data 		: $('#form_kategori').serialize(),
			success:function (data){
				if (!data.success) {
					alert(data.errors.nama);
					$('#nama').focus();
					return false;
				}
				else{
					alert(data.message);
					window.location.reload();
				}
			}
		})
	}

	function ganti(id) {
		$('#kategori').modal('show');
		$.ajax({
			url : 'content/kategori_tampil.php',
			type 		: 'POST',
			dataType	: 'JSON',
			data 		: {id : id},
			success:function (data){
				$('#save').attr('disabled','disabled');
				$('#update').removeAttr('disabled');
				$('input[name="txtNama"]').val(data.nama_kategori);
				$('input[name="txtId"]').val(data.id);
			}
		})
	}

	function ubah(){
		$.ajax({
			url			: 'content/kategori_simpan_ubah.php',
			type 		: 'POST',
			dataType	: 'JSON',
			data 		: $('#form_kategori').serialize(),
			success:function (data){
				if (!data.success) {
					alert(data.errors.nama);
					$('#nama').focus();
					return false;
				}
				else{
					alert(data.message);
					window.location.reload();
				}
			}
		})
	}

	function hapus(id) {
		if(confirm('Anda yakin ingin menghapus?')){
				$.ajax({
				url			: 'content/kategori_hapus.php',
				type 		: 'POST',
				dataType	: 'JSON',
				data 		: {id : id},
				success:function (data){
					if (!data.success) {
						alert(data.errors.id);
						$('#id').focus();
						return false;
					}
					else{
						alert(data.message);
						window.location.reload();
					}
				}
			})
		}
	}
</script>	