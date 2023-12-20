<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="page-header">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Zakat</h4>
                <p class="card-description"></p>

                <!-- Check if 'id' key exists in $zakat array -->
                <?php if (isset($zakat['id'])): ?>
                    <form class="forms-sample" action="<?= base_url('/admin-pengurus/' . $zakat['id']) ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?> name="nama" placeholder="Nama" value="<?= $zakat['nama'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="noHP">Nomor HP / Whatsapp</label>
                        <input type="text" class="form-control" <?= ($validation->hasError('noHP')) ? 'is-invalid' : ''; ?> name="noHP" placeholder="Hp/Whatsapp" value="<?= $zakat['noHP'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="selectBentukZakat">Bentuk Zakat</label>
                        <select class="form-control" name="selectBentukZakat">
                            <option <?= ($zakat['selectBentukZakat'] == 'Beras') ? 'selected' : '' ?>>Beras</option>
                            <option <?= ($zakat['selectBentukZakat'] == 'Uang Tunai') ? 'selected' : '' ?>>Uang Tunai</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlahOrang">Jumlah Orang</label>
                        <input type="text" class="form-control" <?= ($validation->hasError('jumlahOrang')) ? 'is-invalid' : ''; ?> name="jumlahOrang" placeholder="Jumlah Orang" value="<?= $zakat['jumlahOrang'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="jumlahZakat">Jumlah Zakat</label>
                        <input type="text" class="form-control" name="jumlahZakat" placeholder="Jumlah Zakat" value="<?= $zakat['jumlahZakat'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="amil">Amil Zakat</label>
                        <input type="text" class="form-control" <?= ($validation->hasError('amil')) ? 'is-invalid' : ''; ?> name="amil" placeholder="Nama Amil Zakat" value="<?= $zakat['amil'] ?>">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                <?php else: ?>
                    <p>Error: 'id' key is not set in the $zakat array.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>