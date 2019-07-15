<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman upload</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css') ?>">
</head>
<body>
	<div class="header">
		<ul>
			<li><a href="<?php echo  site_url('welcome/beranda')?>">Beranda</a></li>
			<li><a href="<?php echo site_url('welcome') ?>">Upload</a></li>
		</ul>
	</div>
	<div class="content" >
		<?php echo form_open_multipart('welcome/prosesupload'); ?>
		<input type="text" name="nama" placeholder="Nama_Produk"><br><br>
		<input type="text" name="harga" placeholder="Harga_Produk"><br><br>
		<input type="text" name="deskripsi" placeholder="deskripsi"><br><br>
		<input type="file" name="userfile" size="20"/>
		<br /><br />
		<input type="submit" value="upload" />
		<?php echo form_close(); ?>
	</div>
	<div class="footer">
		Copyright &copy; 2019.
	</div>
</body>
</html>