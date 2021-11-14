<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
      <?php  
        include "koneksi1.php";
        $qry_get_listbarang=mysqli_query($conn,"select * from listbarang where 
        id_brg = '".$_GET['id_brg']."'");
        $dt_listbarang=mysqli_fetch_array($qry_get_listbarang);
        ?>
       <div class="alert alert-dark" role="alert">
         <h1>Ubah Data Barang</h1>
       </div>   
    <form action="proses_ubah_barang.php" method="post">
        <input type="hidden" name="id_brg" value="<?=$dt_listbarang['id_brg']?>">
        Nama Barang :
        <input type="text" name="nama_barang" value="<?=$dt_listbarang['nama_barang']?>" class="form-control">
        Jumlah :
        <input type="text" name="jumlah" value="<?=$dt_listbarang['jumlah']?>" class="form-control">
      <button type="submit" class="btn btn-outline-warning btn-lg" name="simpan" value="Simpan">Simpan</button>   
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
