<?php  

require 'core/init.php';

$nama = $_GET['name'];

if($nama == FALSE) header("Location: /");

$siswa = query("SELECT * FROM siswa WHERE nama='$nama'");

require 'view/header.php';

?>
<div class="container" style="margin-top: 70px;">
	<?php foreach ($siswa as $s) : ?>
    <?php endforeach; ?>
	<div class="gambar text-center">
		<img src="img/<?= $s['gambar']; ?>">
	</div>
	<table style="margin-left: 415px; margin-top:15px">
	 <tr>
		<td><strong>NIS</strong></td>
		<td>:</td>
		<td><?= $s["nis"]; ?></td>
	 </tr>	
	 <tr>
	 	<td><strong>Nama</strong></td>
		<td>:</td>
		<td><?= $s["nama"]; ?></td>
	 </tr>
	 <tr>
	 	<td><strong>Jenis Kelamin</strong></td>
		<td>:</td>
		<td><?= $s["jeniskelamin"]; ?></td>
	 </tr>
	 <tr>
	 	<td><strong>Email</strong></td>
		<td>:</td>
		<td><?= $s["email"]; ?></td>
	 </tr>
	 <tr>
	 	<td><strong>Jurusan</strong></td>
		<td>:</td>
		<td><?= $s["jurusan"]; ?></td>
	 </tr>
	</table>
</div>
<?php require 'view/footer.php'; ?>
