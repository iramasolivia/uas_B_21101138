<?php
    include_once("dbkoneksi2.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kode_mk"])){
     $KODE_MK=$_POST["kode_mk"];
     $NAMA_MK=$_POST["nama_mk"];
     $SKS=$_POST["sks"];
     $SEMESTER=$_POST["semester"];
     $JADWAL_KULIAH=$_POST["jadwal_kuliah"];

        $sql = "UPDATE mk SET 
            NAMA_MK='".$NAMA_MK."',
            SKS='".$SKS."',
            SEMESTER='".$SEMESTER."',
            JADWAL_KULIAH='".$JADWAL_KULIAH."' 
            WHERE KODE_MK='".$KODE_MK."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);