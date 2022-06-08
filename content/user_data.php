<div class="mb-3">
	
</div>
<table class="table table-stripped">
	<thead>
		<tr>
			<th>No</th>
			<th>Useraname</th>
			<th>Level</th>
			<th>#</th>
		</tr>
	</thead>	
	<tbody>
		<?php 
			$sql = 'SELECT * FROM users';
			$data = mysqli_query($conn, $sql);
			$no = (int)1;
			foreach ($data as $row) {
		?>		
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['level']; ?></td>
			<td>#</td>
		</tr>
	<?php } ?>
	</tbody>
</table>