<h3>Tambah Data Mata Kuliah</h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil ditambahkan
</div>
<form>
    <div class="mb-3">
        <label class="form-label">KODE_MK</label>
        <input type="text" class="form-control" id="txkode_mk" placeholder="Isikan KODE_MK">
    </div>
    <div class="mb-3">
        <label class="form-label">NAMA_MK</label>
        <input type="text" class="form-control" id="txnama_mk" placeholder="Isikan NAMA_MK">
    </div>
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
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="storedata()" class="btn btn-outline-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-outline-info"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/uas2/client/index.php?p=mk")
}
</script>
<script src="pagemkstoredata.js"></script>