<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<?php $id = 1; ?>
            <div class="page-header">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
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
                            <td></td>
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
                            <td></td>
                            <td><?= $item['norek']?></td>
                            <td><?= $item['foto']?></td>
                            <td><?= $item['pesan']?></td>
                            <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Hapus</button>
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
                          foreach ($infaq as $item){
                          ?>
                          <tr>
                            <td><?php echo $id++ ?></td>
                            <td><?= $item['nama']?></td>
                            <td><?= $item['email']?></td>
                            <td><?= $item['wa']?></td>
                            <td></td>
                            <td><?= $item['norek']?></td>
                            <td><?= $item['foto']?></td>
                            <td><?= $item['pesan']?></td>
                            <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Hapus</button>
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