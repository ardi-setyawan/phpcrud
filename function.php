<?php
  $conn = mysqli_connect("localhost","root","","ardi");

   function query($query){
     global $conn;
     $result=mysqli_query($conn, $query);
     $rows = [];
     while($row =mysqli_fetch_assoc($result)){
     $rows[]=$row;
   }

   return $rows;

 }
 function hapus ($ID){
  global $conn ;
   mysqli_query($conn, "DELETE FROM mahasiswa WHERE ID = $ID");
   return mysqli_affected_rows($conn);
 }

 function ubah ($data){
   global $conn;
   $id =$data["id"];
   $NAMA =$_POST["NAMA"];
   $NIM = $_POST["NIM"];
   $JURUSAN =$_POST["JURUSAN"];
   $GAMBAR =$_POST["GAMBAR"];

   $query = "UPDATE mahasiswa SET
          NAMA = '$NAMA',
          NIM = '$NIM',
          JURUSAN ='$JURUSAN',
          GAMBAR ='$GAMBAR'

          WHRERE id=$id;
          ";

           mysqli_query($conn,$query);

            return mysqli_affected_rows($conn);
 }


  ?>
