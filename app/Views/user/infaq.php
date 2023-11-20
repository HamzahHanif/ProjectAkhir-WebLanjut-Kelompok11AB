<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

          <div class="page-header">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Infaq Online</h4>
                    <p class="card-description"> Belum Paham Cara Untuk Berinfaq Secara Online ? <a href="">Lihat Disini</a> </p>
                    <form class="forms-sample" action="<?= base_url('/user/store')?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword4">Nomor HP / Whatsapp</label>
                        <input type="text" class="form-control" name="wa" placeholder="Hp/Whatsapp">
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">No Rekening</label>
                        <select class="form-control" name="norek">
                          <option>[BCA] 12345678 A.n Masjid Al-Ikhlas</option>
                          <option>[BRI] 12345678 A.n Masjid Al-Ikhlas</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Bukti Pembayaran</label>
                        <input type="file" name="foto" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                          </span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1">Pesan</label>
                        <textarea class="form-control" maxlength="50" placeholder="Maksimal 50 Karakter" name="pesan" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

<?= $this->endSection(); ?>