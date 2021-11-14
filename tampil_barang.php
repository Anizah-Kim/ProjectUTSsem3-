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
    <nav class="navbar navbar-dark bg-secondary">
      <div class="container-fluid">
        <a class="navbar-brand">
        <h1>Data Barang</h1>
        </a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <table class="table table-bordered table-dark table-striped table-hover">
      <thead class="table-dark">
        <tr>
        <th>NO</th>
        <th>NAMA BARANG</th>
        <th>JUMLAH</th>
        <th>#</th>
      </tr>
      </thead>
      <tbody>
          <?php 
            include "koneksi1.php";
            $qry_barang=mysqli_query($conn,"select * from listbarang");
            $no=0;
            while ($dt_listbarang=mysqli_fetch_array($qry_barang)) {
            $no++;?>
          <tr>
            <td><?=$no?></td><td><?=$dt_listbarang['nama_barang']?></td> <td><?=$dt_listbarang['jumlah']?></td>

            <td><a href="ubah_barang.php?id_brg=<?=$dt_listbarang['id_brg']?>" class="btn btn-secondary">Ubah</a> | <a href="hapus_brg.php?id_brg=<?=$dt_listbarang['id_brg']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
          </tr>
          <?php
          }
          ?>
      </tbody>
    </table>

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