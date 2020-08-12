<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body style="background-image:url(bg.jpg);background-size:cover">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<div class="container">
			<a class="navbar-brand" target="_blank" href=""><b>RENJANA</b>DEV</a>
		</div>
		</div>
	</nav>
	<div class="col-md-1"></div>
	<div class="col-md-12 well">
		<h3 class="text-primary"><b>RELUD</b> by <small>RENJANA-DEV</small></h3> <b>Punya Barang Bekas?</b> jual di <b>RELUD</b> aja
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form action="save.php" method="POST">
				<div class="form-group">
					<label>NAMA</label>
					<input class="form-control" type="text" name="name">
				</div>
				<div class="form-group">
					<label>E-MAIL</label>
					<input class="form-control" type="text" name="email" />
				</div>
				<div class="form-group">
					<label>NO.HP</label>
					<input class="form-control" type="text" name="number" />
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input class="form-control" type="text" name="address" />
				</div>
				<div class="form-group">
					<label>Nama Barang</label>
					<input class="form-control" type="text" name="nm_brg" />
				</div>
				<div class="form-group">
					<label>Harga Barang</label>
					<input class="form-control" type="text" name="hrg_brg" />
				</div>
				<div class="form-group">
					<label>Stok Barang</label>
					<input class="form-control" type="text" name="stok_brg" />
				</div>
				<div class="form-group">
					<label>Gambar Barang</label>
					<input class="form-control" type="file" name="gbr_brg" />
				</div>
				<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> SIMPAN</button>
			</form>
		</div>
		<div class="col-md-8">
			<form method="POST" action="create.php">
				<button class="btn btn-success pull-right"><span class="glyphicon glyphicon-export"></span> Create JSON File</button>
			</form>
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<td>Nama Depan</td>
						<td>E-mail</td>
						<td>No.HP</td>
						<td>Alamat</td>
						<td>Nama Barang</td>
						<td>Harga Barng</td>
						<td>Stok Barang</td>
						<td>Gambar Barang</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						$query = mysqli_query($conn, "SELECT * FROM `member`");
						while($fetch = mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $fetch['name']?></td>
						<td><?php echo $fetch['email']?></td>
						<td><?php echo $fetch['number']?></td>
						<td><?php echo $fetch['address']?></td>
						<td><?php echo $fetch['nm_brg']?></td>
						<td><?php echo $fetch['hrg_brg']?></td>
						<td><?php echo $fetch['stok_brg']?></td>
						<td align="center">
						<?php echo $fetch['gbr_brg']?></td>
						<td>
							<a style="color:red" href="hapus.php?id=<?= $fetch['mem_id']?>">Hapus</a>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
