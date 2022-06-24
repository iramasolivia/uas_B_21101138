<h3>Edit Data Dosen <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Hapus
</div>
<form>
    <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="txnip" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama </label>
        <input type="text" class="form-control" id="txnama">
    </div>
<div id="sembunyi">
    <div class="mb-3">
        <label class="form-label">Telp</label>
        <input type="text" class="form-control" id="txtelp" placeholder="Isikan No. Telp">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" id="txalamat" placeholder="Isikan Alamat">
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
  location.replace("http://localhost/uas2/client/index.php?p=dsn")
}
</script>
<script src="pagedsncaridata.js"></script>
<script src="pagedsndeletedata.js"></script>