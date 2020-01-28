<?php
//function untuk menghapus data  di dalam data base.
require 'function.php' ;
$ID = $_GET ["ID"];


if (hapus($ID) >0) {

  echo "
    <script>
    alert('data berhasil di hapus');
    document.location.href='crud.php';
    </script>
  ";


}  else {

      echo "
        <script>
        alert('data gagal di hapus');
        document.location.href='crud.php';
        </script>
      "
  ;
}


 ?>
