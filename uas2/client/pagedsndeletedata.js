function deletedata(){
     let nip = document.getElementById("txnip").value;
     
     let dta = "nip="+nip;
     const gh = new XMLHttpRequest();
     gh.open("POST","http://localhost/uas2/server/dtdsndelete.php");
     gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
     gh.send(dta);
 
     gh.onload = function(){
         const dta = JSON.parse(this.responseText);
         if(dta["sukses"]){
             document.getElementById("pesan").style.display = "block";
         }
         setTimeout(()=>{
             window.location.href="http://localhost/uas2/client/index.php?p=dsn";
         },5000);
     }
 
 }