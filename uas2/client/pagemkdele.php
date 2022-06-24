<h3>Edit Data Mata Kuliah<span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Hapus
</div>
<form>
    <div class="mb-3">
        <label class="form-label">KODE_MK</label>
        <input type="text" class="form-control" id="txkode_mk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">NAMA_MK</label>
        <input type="text" class="form-control" id="txnama_mk">
    </div>
    <div id="sembunyi">
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="text" class="form-control" id="txsks" placeholder="Isikan SKS">
    </div>
    <div class="mb-3">
        <label class="form-label">SEMESTER</label>
        <input type="text" class="form-control" id="txsemester" placeholder="Isikan SEMESTER">
    </div>
    <div class="mb-3">
        <label class="form-label">JADWAL_KULIAH</label>
        <input type="time" class="form-control" id="txjadwal_kuliah" placeholder="Isikan JADWAL_KULIAH">
    </div>
</div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="deletedata()" class="btn btn-danger">Hapus Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";
    document.getElementById("sembunyi").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/uas2/client/index.php?p=mk")
}
</script>
<script src="pagemkcaridata.js"></script>
<script src="pagemkdeletedata.js"></script>