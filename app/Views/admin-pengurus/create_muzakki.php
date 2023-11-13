<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="page-header">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Zakat</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="<?= base_url('/admin-pengurus/store')?>" method="POST" enctype="multipart/form-data">
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
                        <select class="form-control" name="selectBentukZakat">
                          <option>Beras</option>
                          <option>Uang Tunai</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="jumlahOrang">Jumlah Orang</label>
                        <input type="text" class="form-control" name="jumlahOrang" placeholder="Jumlah Orang">
                      </div>

                      <div class="form-group">
                        <label for="jumlahZakat">Jumlah Zakat</label>
                        <input type="text" class="form-control" name="jumlahZakat" placeholder="Jumlah Zakat">
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

            <?= $this->endSection(); ?>