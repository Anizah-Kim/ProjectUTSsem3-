<?php  
	if ($_GET['id_brg']) {
		include "koneksi1.php";
		$qry_hapus=mysqli_query($conn,"delete from listbarang where id_brg='".$_GET['id_brg']."'");
		if ($qry_hapus) {
			echo "<script>alert('Sukses hapus data');location.href='tampil_barang.php';</script>";
		} else {
			echo "<script>alert('Gagal hapus data');location.href='tampil_barang.php';</script>";
		}
	}
?>