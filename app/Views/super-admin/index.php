<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
            <div class="row ">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data User</h4>
                    
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
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php
                          foreach ($users as $user){
                          ?>
                          <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $user->username ?></td>
                            <td><?= $user->email?></td>
                            <td><?= $user->name ?></td >
                          </tr>
                          <?php
                        }
                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
<?= $this->endSection(); ?>