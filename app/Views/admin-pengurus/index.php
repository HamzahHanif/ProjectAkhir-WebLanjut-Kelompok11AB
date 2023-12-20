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

                <h4 class="card-title">Data Zakat</h4>
                <p>
                    <a href="<?= base_url('admin-pengurus/create')?>" class="btn btn-primary btn-fw">Tambah Data</a>
                </p>
                <?php if (empty($zakat)) : ?>
                    <p class="text-danger">Data zakat Kosong</p>
                <?php else : ?>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> No </th>
                                    <th> Nama Muzakki </th>
                                    <th> No HP </th>
                                    <th> Bentuk Zakat </th>
                                    <th> Jumlah Orang </th>
                                    <th> Jumlah Zakat </th>
                                    <th> Amil </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($zakat as $zakat) : ?>
                                    <tr>
                                        <td><?= $id++ ?></td>
                                        <td><?= $zakat['nama'] ?></td>
                                        <td><?= $zakat['noHP'] ?></td>
                                        <td><?= $zakat['selectBentukZakat'] ?></td>
                                        <td><?= $zakat['jumlahOrang'] ?></td>
                                        <td><?= $zakat['jumlahZakat'] ?></td>
                                        <td><?= $zakat['amil'] ?></td>
                                        <td>
                                            <button type="submit" class="btn btn-outline-warning" onclick="window.location.href='<?= base_url('/admin-pengurus/' . $zakat['id'] . '/edit_data_muzakki') ?>'">
                                            <i class="mdi mdi-tooltip-edit text-warning"></i>
                                            </button>
                                            
                                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $zakat['id'] ?>">
                                                <i class="mdi mdi-delete"></i>
                                            </button>

                                            <!-- Modal konfirmasi penghapusan -->
                            <div class="modal fade" id="deleteModal<?= $zakat['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                        <form action="<?= base_url('admin-pengurus/' . $zakat['id']) ?>" method="post">
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
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>