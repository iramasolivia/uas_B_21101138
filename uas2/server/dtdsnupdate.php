<?php
    include_once("dbkoneksi2.php");
    
    $r["sukses"]=false;
    if(isset($_POST["nip"])){
          $NIP=$_POST["nip"];
          $NAMA=$_POST["nama"];
          $TELP=$_POST["telp"];
          $ALAMAT=$_POST["alamat"];
   

        $sql = "UPDATE dsn SET 
            NAMA='".$NAMA."',
            TELP='".$TELP."',
            ALAMAT='".$ALAMAT."' 
            WHERE NIP='".$NIP."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);