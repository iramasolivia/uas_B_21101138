<?php
    $output["error"] = true;
   
    if(isset($_GET["nip"])){
        $NIP = $_GET["nip"];

        include_once("dbkoneksi2.php");
        $sql = "SELECT * FROM dsn WHERE NIP='".$NIP."';";
        $hsl = mysqli_query($cnn, $sql);
        $output["isi"] = mysqli_fetch_all($hsl);
        $output["error"] = false;
    } 
   
    echo json_encode($output);