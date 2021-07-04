<?php 
$koneksi= new mysqli("localhost","root","","layanangizi");

function tambah()
{
	$a= $_POST['a'];
	$b= $_POST['b'];
	$c= $_POST['c'];
	$d= $_POST['d'];
	$e= $_POST['e'];
	$f= $_POST['f'];
	$g= $_POST['g'];
	$h= $_POST['h'];
	$i= $_POST['i'];
	$j= $_POST['j'];
   global $koneksi;
	$tambah= " INSERT INTO `pasien` VALUES('$a','$b', '$c', '$d', '$e','$f','$g', '$h', '$i', '$j');";
	$cek=$koneksi->query($tambah);
	return mysqli_affected_rows($koneksi);
}
function tambah1()
{
	$a= $_POST['a'];
	$b= $_POST['b'];
	$c= $_POST['c'];
	$d= $_POST['d'];
   global $koneksi;
	$tambah= " INSERT INTO `ruangan` VALUES('$a','$b', '$c', '$d');";
	$cek=$koneksi->query($tambah);
	return mysqli_affected_rows($koneksi);
}
function tambah2()
{
	$a= $_POST['a'];
	$b= $_POST['b'];
	$c= $_POST['c'];
	$d= $_POST['d'];
   global $koneksi;
	$tambah= " INSERT INTO `gizi` VALUES('$a','$b', '$c', '$d');";
	$cek=$koneksi->query($tambah);
	return mysqli_affected_rows($koneksi);
}

function ubah()
{
global $koneksi;
	$a= $_POST['a'];
	$b= $_POST['b'];
	$c= $_POST['c'];
	$d= $_POST['d'];
	$e= $_POST['e'];
	$f= $_POST['f'];
	$g= $_POST['g'];
	$h= $_POST['h'];
	$i= $_POST['i'];
	$j= $_POST['j'];

	$ubah="UPDATE `pasien` SET norm='$a', noidpasien='$b', jenisid='$c', namapasien='$d', alamat='$e', agama='$f', golongandarah='$g', tanggallahir='$h', jeniskelamin='$i', waktudaftar='$j'";
	$cek=$koneksi->query($ubah);
	return mysqli_affected_rows($koneksi);

}
function ubah1()
{
global $koneksi;
	$a= $_POST['a'];
	$b=$_POST['b'];
	$c= $_POST['c'];
	$d= $_POST['d'];
$ubah1="UPDATE `ruangan` SET noruangan='$a', norm='$b', waktumasuk='$c', waktukeluar='$d'";
$cek=$koneksi->query($ubah1);
	return mysqli_affected_rows($koneksi);


}

function ubah2()
{
global $koneksi;
	$a= $_POST['a'];
	$b=$_POST['b'];
	$c= $_POST['c'];
	$d= $_POST['d'];
$ubah1="UPDATE `gizi` SET idlayanan='$a', norm='$b', waktulayanan='$c', diet='$d' WHERE idlayanan='$a'";
$cek=$koneksi->query($ubah1);
	return mysqli_affected_rows($koneksi);


}

function hapus($b)
{
	global $koneksi;
		mysqli_query($koneksi,"DELETE FROM pasien WHERE noidpasien='$b'");
		return mysqli_affected_rows($koneksi);
}
function hapus1($c)
{
	global $koneksi;
		mysqli_query($koneksi,"DELETE FROM ruangan WHERE noruangan='$c'");
		return mysqli_affected_rows($koneksi);
}
function hapus2($d)
{
	global $koneksi;
		mysqli_query($koneksi,"DELETE FROM gizi WHERE idlayanan='$d'");
		return mysqli_affected_rows($koneksi);
}

?>
