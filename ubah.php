<?php
require 'function.php';

$conn =mysqli_connect("localhost", "root", "","ardi");

$ID = $_GET["ID"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $ID")[0];


  if ( isset ($_POST["submit"])){
      if (hapus($ID) >0) {

      echo "
        <script>
        alert('data berhasil di ubah');
        document.location.href='crud.php';
        </script>
      ";


    }  else {

          echo "
            <script>
            alert('data gagal di ubah');
            document.location.href='crud.php';
            </script>
          "
      ;
    }

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ubah data</title>
</head>
<body>
  <h1>
    Ubah data
  </h1>
  <form action="" method="post">
    <input type="hidden" name="ID" value="<?= $mhs["ID"]; ?>">
      <ul>
        <li>
          <label for="NAMA">NAMA</label>
          <input type="text" name="NAMA" id="NAMA" required
          value="<?= $mhs["NAMA"]; ?>">
        </li>
        <li>
        <label for="NIM">NIM</label>
        <input type="text" name="NIM" id="NIM" requied
        value="<?= $mhs["NIM"]; ?>">
        </li>
        <li>
          <label for="JURUSAN">Jurusan</label>
          <input type="text" name="JURUSAN" id="JURUSAN" required
          value ="<?= $mhs["JURUSAN"]; ?>">
        </li>
        <li>
          <label for="GAMBAR">Gambar</label>
          <input type="text" name="GAMBAR" id="GAMBAR" required
          value ="<?=$mhs["GAMBAR"]; ?>">
        </li>
        <li>
          <button type="submit" name="submit">Ubah</button>
        </li>

      </ul>
      <a href="crud.php">Halaman index</>
  </form>

</body>
</html>
