function updatedata(){
     let kode_mk = document.getElementById("txkode_mk").value;
     let nama_mk = document.getElementById("txnama_mk").value;
     let sks = document.getElementById("txsks").value;
     let semester = document.getElementById("txsemester").value;
     let jadwal_kuliah = document.getElementById("txjadwal_kuliah").value;
 
     let dta = "kode_mk="+kode_mk+"&nama_mk="+nama_mk+"&sks="+sks+"&semester="+semester+"&jadwal_kuliah="+jadwal_kuliah;
     const gh = new XMLHttpRequest();
     gh.open("POST","http://localhost/uas2/server/dtmkupdate.php");
     gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
     gh.send(dta);
 
 
     gh.onload = function(){
         const dta = JSON.parse(this.responseText);
         if(dta["sukses"]){
             document.getElementById("pesan").style.display = "block";
         }
         setTimeout(()=>{
             window.location.href="http://localhost/uas2/client/index.php?p=mk";
         },5000);
     }
 
 }