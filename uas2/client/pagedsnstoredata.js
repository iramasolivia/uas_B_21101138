function storedata(){
     let nip = document.getElementById("txnip").value;
     let nama = document.getElementById("txnama").value;
     let telp= document.getElementById("txtelp").value;
     let alamat = document.getElementById("txalamat").value;
    
     let dta = "nip="+nip+"&nama="+nama+"&telp="+telp+"&alamat="+alamat;
     const gh = new XMLHttpRequest();
     gh.open("POST","http://localhost/uas2/server/dtdsnstore.php");
     gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
     gh.send(dta);
 
     gh.onload = function(){
         const dta = JSON.parse(this.responseText);
         if(dta["sukses"]){
             document.getElementById("pesan").style.display = "block";
         }
     }
 
 }