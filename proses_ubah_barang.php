<?php  
if ($_POST) {
	$id_brg=$_POST['id_brg'];
	$nama_barang=$_POST['nama_barang'];
	$jumlah=$_POST['jumlah'];

	if (empty($nama_barang)) {
		echo "<script>alert('nama tidak boleh kosong');location.href='tambah_barang.php';</script>";

	} elseif (empty($jumlah)) {
		echo "<script>alert('jumlah tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
	} else {
		include "koneksi1.php";
		if (empty($jumlah)) {
			$update=mysqli_query($conn,"update listbarang set nama_barang='".$nama_barang."',jumlah='".$jumlah."' where id_brg = '".$id_brg."' ") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert('Sukses update barang');location.href='tampil_barang.php';</script>";
			} else {
				echo "<script>alert('Gagal update barang');location.href='ubah_barang.php?id_brg=".$id_brg."';</script>";
			}
		} else {
			$update=mysqli_query($conn,"update listbarang set nama_barang='".$nama_barang."',jumlah='".$jumlah."' where id_brg = '".$id_brg."' ") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert('Sukses update barang');location.href='tampil_barang.php';</script>";
			} else {
				echo "<script>alert('Gagal update barang');location.href='ubah_barang.php?id_brg=".$id_brg."';</script>";
			}
		}
	}
}
?>