<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="page-header">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Zakat</h4>
        <p class="card-description"></p>
        <form class="forms-sample" action="<?= base_url('/admin-pengurus/store') ?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama">
          </div>

          <div class="form-group">
            <label for="noHP">Nomor HP / Whatsapp</label>
            <input type="text" class="form-control" name="noHP" placeholder="Hp/Whatsapp">
          </div>

          <div class="form-group">
            <label for="selectBentukZakat">Bentuk Zakat</label>
            <select class="form-control" name="selectBentukZakat" id="selectBentukZakat">
              <option value="Beras">Beras</option>
              <option value="Uang Tunai">Uang Tunai</option>
            </select>
          </div>

          <div class="form-group">
            <label for="jumlahOrang">Jumlah Orang</label>
            <input type="text" class="form-control" name="jumlahOrang" id="jumlahOrang" placeholder="Jumlah Orang">
          </div>

          <div class="form-group">
            <label for="jumlahZakat">Jumlah Zakat</label>
            <input type="text" class="form-control" name="jumlahZakat" id="jumlahZakat" placeholder="Jumlah Zakat" readonly>
          </div>

          <div class="form-group">
            <label for="amil">Amil Zakat</label>
            <input type="text" class="form-control" name="amil" placeholder="Nama Amil Zakat">
          </div>

          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <!-- <button class="btn btn-dark">Cancel</button> -->
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  document.getElementById('selectBentukZakat').addEventListener('change', function () {
    updateJumlahZakat();
  });

  document.getElementById('jumlahOrang').addEventListener('input', function () {
    updateJumlahZakat();
  });

  function updateJumlahZakat() {
    var bentukZakat = document.getElementById('selectBentukZakat').value;
    var jumlahOrang = document.getElementById('jumlahOrang').value;
    var jumlahZakatInput = document.getElementById('jumlahZakat');

    if (bentukZakat == 'Beras') {
      // Hitung jumlah zakat otomatis berdasarkan ketentuan (2 kg beras per orang)
      var jumlahZakat = 2 * jumlahOrang;
      jumlahZakatInput.value = jumlahZakat;
    } else if (bentukZakat == 'Uang Tunai') {
      // Hitung jumlah zakat otomatis berdasarkan ketentuan (Rp30.000 per orang)
      var jumlahZakat = 30000 * jumlahOrang;
      jumlahZakatInput.value = jumlahZakat;
    } else {
      // Reset nilai jumlah zakat jika bentuk zakat tidak diketahui
      jumlahZakatInput.value = '';
    }
  }
</script>

<?= $this->endSection(); ?>