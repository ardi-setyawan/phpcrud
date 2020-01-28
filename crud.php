<?php
require 'function.php';
// query ("SELECT * FROM mahasiswa");
 $mahasiswa=query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabel Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
  <br><br>

      <table border="1" cellpadding="10" cellspacing="0" align="center">

      <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>JURUSAN</th>
      </tr>

      <?php $i=1 ?>
      <?php foreach ($mahasiswa as $row ) :?>
      <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="ubah.php?ID=<?= $row ["ID"]; ?>">ubah</a> |
            <a href="hapus.php?ID=<?= $row ["ID"]; ?>"onclick="return confirm('yakin');">hapus</a>
        </td>
        <td>
          <img src="img/<?php echo $row["GAMBAR"]; ?>">
        </td>
        <td><?php echo $row["NIM"]; ?></td>
        <td><?php echo $row["NAMA"]; ?></td>
        <td><?= $row["JURUSAN"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
      </table>
  </body>
</html>
