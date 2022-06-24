<h3>Tambah Data Dosen</h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil ditambahkan
</div>
<form>
    <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="txnip" placeholder="Isikan NIP">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" id="txnama" placeholder="Isikan Nama Lengkap Dosen">
    </div>
    <div class="mb-3">
        <label class="form-label">Telp</label>
        <input type="text" class="form-control" id="txtelp" placeholder="Isikan No. Telp">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" id="txalamat" placeholder="Isikan Alamat">
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="storedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/uas2/client/index.php?p=dsn")
}
</script>
<script src="pagedsnstoredata.js"></script>