<?php  
if ($_POST) {
	$nama_barang=$_POST['nama_barang'];
	$jumlah=$_POST['jumlah'];
	if(empty($nama_barang)){
		echo "<script>alert('Nama Barang tidak boleh kosong');location.href='tambah_barang.php';</script>";

	} elseif (empty($jumlah)) {
		echo "<script>alert('Jumlah tidak boleh kosong');location.href='tambah_barang.php';</script>";
	} else {
		include "koneksi1.php";
		$insert=mysqli_query($conn,"insert into listbarang (nama_barang, jumlah) value ('".$nama_barang."','".$jumlah."')");
		if($insert){
			echo "<script>alert('Sukses menambahkan data barang');location.href='tambah_barang.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data barang');location.href='tambah_barang.php';</script>";
		}
	}
}
?>