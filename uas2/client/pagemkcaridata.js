
let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let kode_mk = urlP.get("kode_mk");

let urltarget = new URL("http://localhost/uas2/server/dtmkkode_mk.php");
urltarget.searchParams.set("kode_mk",kode_mk);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    console.log(dta["isi"]);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txkode_mk").value = dta["isi"][i][0];
        document.getElementById("txnama_mk").value = dta["isi"][i][1];
        document.getElementById("txsks").value = dta["isi"][i][2];
        document.getElementById("txsemester").value = dta["isi"][i][3];
        document.getElementById("txjadwal_kuliah").value = dta["isi"][i][4];
    }

}