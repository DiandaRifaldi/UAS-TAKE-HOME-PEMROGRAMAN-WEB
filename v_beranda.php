<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Beranda</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css') ?>">
</head>
<body>
	
	<div class="header">
		<ul>
			<h1> </h1>
			<li><a href="<?php echo  site_url('welcome/beranda')?>">Beranda</a></li>
			<li><a href="<?php echo site_url('welcome') ?>">Upload</a></li>
		</ul>
	</div>
	<div class="content">
		<?php
		foreach ($produk as $key){
		?>
		<div class="box-produk">
			<img src="<?php echo base_url('produk/'.$key['gambar']) ?>" width="100%" height="200">
			<?php echo $key['nama_produk']?> <br>
			Rp. <?php echo number_format($key['harga'],2,',','.') ?>
			<?php echo base_url($key['deskripsi']); ?>
		</div>
		<?php } ?>
	</div>
	<div class="footer">
		Copyright &copy; 2019.
		kerja sama
	</div>
</body>
</html>