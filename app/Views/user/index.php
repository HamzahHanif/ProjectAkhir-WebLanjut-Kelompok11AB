<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
            <div class="page-header">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <h4 class="card-title">Data Infaq Masjid Al-Ikhlas</h4>
                    <p>
                    Ingin Berinfaq ? <a href="<?= base_url('infaq'); ?>">Klik Disini</a>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Nama </th>
                            <th> Jumlah Infaq </th>
                            <th> Status </th>
                            <th> Tanggal </th>
                            <th> Pesan </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> Hamba Allah </td>
                            <td>
                              200000
                            </td>
                            <td>
                            <div class="badge badge-outline-success">Sukses</div>
                            </td>
                            <td> May 15, 2015 </td>
                            <td> Semoga Bermanfaat </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> Hamba Allah </td>
                            <td>
                              50000
                            </td>
                            <td>
                            <div class="badge badge-outline-warning">Menunggu</div>
                            </td>
                            <td> July 1, 2015 </td>
                            <td> Semoga Bermanfaat </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> Niko Untuk Negri </td>
                            <td>
                              50000
                            </td>
                            <td>
                            <div class="badge badge-outline-success">Sukses</div>
                            </td>
                            <td> Apr 12, 2015 </td>
                            <td> Free Palestine!! </td>
                          </tr>
                          <tr>
                            <td> 4 </td>
                            <td> Hamba Allah </td>
                            <td>
                              100000
                            </td>
                            <td>
                            <div class="badge badge-outline-success">Sukses</div>
                            </td>
                            <td> May 15, 2015 </td>
                            <td> Semoga Bermanfaat </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Hamba Allah </td>
                            <td>
                              1000000
                            </td>
                            <td>
                            <div class="badge badge-outline-success">Sukses</div>
                            </td>
                            <td> May 03, 2015 </td>
                            <td> Semoga Bermanfaat </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?= $this->endSection(); ?>