<?php
include_once("dbkoneksi2.php");
   $sql = "SELECT NIP, NAMA, TELP,  ALAMAT FROM dsn";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);