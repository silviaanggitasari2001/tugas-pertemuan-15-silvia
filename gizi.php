<?php 
require '../fungsi.php';
$ambil= mysqli_query($koneksi, "SELECT * FROM gizi");
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>layanan gizi</title>
 	<style type="text/css">
 		*{
 			margin: 0;
 			padding: 0;
 			font-family: sans-serif;
 		}
 		.d{
	position: fixed;
	bottom: 0;
	right: 0;
	left: 0;
	background-color: red;
	text-align: center;
	color: white;

}

  	a{
  		text-decoration: none;
  		color:blue;

  	}
.a{
	text-align: center;
	
}

body{
	background-color: grey;
}


 	</style>
 </head>
 <body>
 	 <div class="a">
 	 <b><a href="../pasien/daftar.php">KEMBALI KE DAFTAR</a></b>||<b><a href="input.php">TAMBAH DATA</a></b> || <b><a href="../ruangan/ruangan.php">LAYANAN RUANGAN</a></b>
 	<hr>
 </div>
 <table border="1" cellspacing="0" cellpadding="10" width="100%">
 	<tr>
 		<th>NO</th>
 		<th>AKSI</th>
 		<th>Id Layanan</th>
 		<th>No Rm</th>
 		<th>Waktu Layanan</th>
 		<th>Diet</th>
 	</tr>
 	<?php $i=1; ?>
<?php while ($row= mysqli_fetch_assoc($ambil)): {

} ?>
 	<tr>
 		<td><?php echo $i; ?></td>
 		<td><a href="../hapus.php?no2=<?php echo $row['idlayanan']; ?>" onclick="return confirm('yakin ingin menghapus..?')">hapus</a> <=> <a href="edit.php?no2=<?php echo $row['idlayanan']; ?> ">ubah</a></td>
 		<td> <?php echo $row ['idlayanan']; ?> </td>
 		<td><?php echo $row ['norm']; ?></td>
 		<td><?php echo $row ['waktulayanan']; ?></td>
 		<td><?php echo $row ['diet']; ?></td>
 	</tr>
<?php $i++; ?>

 <?php endwhile; ?>

 </table>
 <div class="d"> <p>Silvia a</p> </div>
 </body>
 </html>


