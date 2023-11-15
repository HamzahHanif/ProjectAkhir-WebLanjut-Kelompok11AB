<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
            <div class="row ">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data User</h4>
                    <p>
                    <button type="button" class="btn btn-primary btn-fw">Tambah Data</button>
                    </p>
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code>
                    </p> -->
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Nama Pengguna </th>
                            <th> Email </th>
                            <th> Role </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> Herman Beck </td>
                            <td> hermanbeck@gmail.com</td>
                            <td> Admin Pengurus </td>
                            <td>  </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> Messsy Adam </td>
                            <td> messyadam@gmail.com</td>
                            <td> Admin Pengurus </td>
                            <td>  </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> John Richards </td>
                            <td> johnrichards@gmail.com</td>
                            <td> Admin Pengurus </td>
                            <td>  </td>
                          </tr>
                          <tr>
                            <td> 4 </td>
                            <td> Peter Meggik </td>
                            <td> petermeggik@gmail.com</td>
                            <td> Admin Pengurus </td>
                            <td>  </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Edward </td>
                            <td> edward@gmail.com</td>
                            <td> Admin Pengurus </td>
                            <td>  </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
<?= $this->endSection(); ?>