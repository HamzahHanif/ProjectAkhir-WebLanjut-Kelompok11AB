<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<?php $id = 1; ?>

<div class="page-header">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Zakat</h4>
                <p>
                    <a href="<?= base_url('admin-pengurus/create')?>" class="btn btn-primary btn-fw">Tambah Data</a>
                    <a href="<?= base_url('admin-pengurus/cetak-laporan')?>" class="btn btn-success btn-fw">Cetak Laporan</a>
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
                                            <a href="<?= base_url('/admin-pengurus/' . $zakat['id'] . '/edit_data_muzakki') ?>" class="btn btn-warning">Edit</a>
                                            <form action="<?= base_url('admin-pengurus/' . $zakat['id']) ?>" method="post" style="display:inline-block">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
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