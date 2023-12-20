<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<?php $id = 1; ?>
            <div class="page-header">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <?php if (session()->has('success')): ?>
                <div class="alert alert-success" role="alert" id="flashMessage">
                <?= session('success') ?>
                </div>
            <script>
                setTimeout(function() {
                document.getElementById('flashMessage').style.display = 'none';
                }, 3000);
            </script>
            <?php endif; ?>
                    <h4 class="card-title">Data Infaq Masjid Al-Ikhlas</h4>
                    <?php if( in_groups('user')) : ?>
                    <p>
                    Ingin Berinfaq ? <a href="<?= base_url('/user/create-infaq'); ?>">Klik Disini</a>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Nama </th>
                            <th> Jumlah </th>
                            <th> Pesan </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          foreach ($infaq as $item){
                          ?>
                          <tr>
                            <td><?php echo $id++ ?></td>
                            <td><?= $item['nama']?></td>
                            <td>Rp <?= $item['jumlah']?></td>
                            <td><?= $item['pesan']?></td>
                            
                        </tr>
                          <?php
                        }
                        ?>
                        </tbody>
                      </table>
                      <?php endif; ?>

                      <?php if( in_groups('super-admin')) : ?>
                    <p>
                    <a href="<?= base_url('/user/create-infaq')?>" class="btn btn-primary btn-fw">Tambah Data Infaq</a>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Nama </th>
                            <th> Email </th>
                            <th> Whatsapp </th>
                            <th> Jumlah </th>
                            <th> Norek</th>
                            <th> Foto </th>
                            <th> Pesan </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          foreach ($infaq as $item){
                          ?>
                          <tr>
                            <td><?php echo $id++ ?></td>
                            <td><?= $item['nama']?></td>
                            <td><?= $item['email']?></td>
                            <td><?= $item['wa']?></td>
                            <td>Rp <?= $item['jumlah']?></td>
                            <td><?= $item['norek']?></td>
                            <td><img src="<?= $item['foto'] ?>" alt="Foto Infaq" style="max-width: 100px; max-height: 100px;"></td>
                            <td><?= $item['pesan']?></td>
                            <td>
                              <button type="submit" class="btn btn-outline-warning" onclick="window.location.href='<?= base_url('/user/' . $item['id'] . '/edit_infaq') ?>'">
                                <i class="mdi mdi-tooltip-edit text-warning"></i>
                              </button>
                              
                              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $item['id'] ?>">
                                                <i class="mdi mdi-delete"></i>
                                            </button>

                                            <!-- Modal konfirmasi penghapusan -->
                            <div class="modal fade" id="deleteModal<?= $item['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Data</h5>
                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <!-- Form penghapusan data -->
                                        <form action="<?= base_url('user/' . $item['id']) ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                            </td>
                        </tr>
                          <?php
                        }
                        ?>
                        </tbody>
                      </table>
                      <?php endif; ?>

                      <?php if( in_groups('admin-pengurus')) : ?>
                    <p>
                    <a href="<?= base_url('/user/create-infaq')?>" class="btn btn-primary btn-fw">Tambah Data Infaq</a>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Nama </th>
                            <th> Email </th>
                            <th> Whatsapp </th>
                            <th> Jumlah </th>
                            <th> Norek</th>
                            <th> Foto </th>
                            <th> Pesan </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          foreach ($infaq as $infaq){
                          ?>
                          <tr>
                            <td><?php echo $id++ ?></td>
                            <td><?= $infaq['nama']?></td>
                            <td><?= $infaq['email']?></td>
                            <td><?= $infaq['wa']?></td>
                            <td>Rp <?=$infaq['jumlah']?></td>
                            <td><?= $infaq['norek']?></td>
                            
                            <td>
                            <img src="<?= base_url('assets/uploads/img/' . $infaq['foto']) ?>" alt="Foto Infaq" style="max-width: 100px; max-height: 100px;">
                            </td>
                            <td><?= $infaq['pesan']?></td>
                            <td>
                              <button type="submit" class="btn btn-outline-warning" onclick="window.location.href='<?= base_url('/user/' . $infaq['id'] . '/edit_infaq') ?>'">
                                <i class="mdi mdi-tooltip-edit text-warning"></i>
                              </button>

                              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $infaq['id'] ?>">
                                                <i class="mdi mdi-delete"></i>
                                            </button>

                                            <!-- Modal konfirmasi penghapusan -->
                            <div class="modal fade" id="deleteModal<?= $infaq['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Data</h5>
                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <!-- Form penghapusan data -->
                                        <form action="<?= base_url('user/' . $infaq['id']) ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                          </td>
                        </tr>
                          <?php
                        }
                        ?>
                        </tbody>
                      </table>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?= $this->endSection(); ?>