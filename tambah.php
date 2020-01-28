  <?php

$conn =mysqli_connect("localhost", "root", "","ardi");
  if ( isset ($_POST["submit"])){
    //ambil data dari tiap element date_create_from_format

    $NAMA =$_POST["NAMA"];
    $NIM = $_POST["NIM"];
    $JURUSAN =$_POST["JURUSAN"];
    $GAMBAR =$_POST["GAMBAR"];

    $query = "INSERT INTO mahasiswa
              VALUE
              ('id','$NAMA','$NIM','$JURUSAN','$GAMBAR')
              ";

            mysqli_query($conn,$query);
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tambah data</title>
  </head>
  <body>
    <h1>
      Tambah data
    </h1>
    <form action="" method="post">
        <ul>
          <li>
            <label for="Nama">Nama</label>
            <input type="text" name="NAMA" id="NAMA">
          </li>
          <li>
          <label for="NIM">NIM</label>
          <input type="text" name="NIM" id="NIM">
          </li>
          <li>
            <label for="JURUSAN">Jurusan</label>
            <input type="text" name="JURUSAN" id="JURUSAN">
          </li>
          <li>
            <label for="GAMBAR">Gambar</label>
            <input type="text" name="GAMBAR" id="GAMBAR">
          </li>
          <li>
            <button type="submit" name="submit">Tambahkan</button>
          </li>

        </ul>
        <a href="crud.php">Halaman index</>
    </form>

  </body>
</html>
