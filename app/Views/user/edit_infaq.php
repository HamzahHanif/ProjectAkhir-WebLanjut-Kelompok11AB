<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="page-header">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Infaq</h4>
                <p class="card-description"></p>

                <!-- Check if 'id' key exists in $zakat array -->
                <?php if (isset($infaq['id'])): ?>
                    <form class="forms-sample" action="<?= base_url('/user/' . $infaq['id']) ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $infaq['nama'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $infaq['email'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="wa">Nomor HP / Whatsapp</label>
                        <input type="text" class="form-control" name="wa" placeholder="Hp/Whatsapp" value="<?= $infaq['wa'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="norek">No Rekening</label>
                        <select class="form-control" name="norek">
                            <option <?= ($infaq['norek'] == 'BCA') ? 'selected' : '' ?>>[BCA] 12345678 A.n Masjid Al-Ikhlas</option>
                            <option <?= ($infaq['norek'] == 'BRI') ? 'selected' : '' ?>>[BRI] 12345678 A.n Masjid Al-Ikhlas</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <input type="text" class="form-control" name="pesan" placeholder="Pesan" value="<?= $infaq['pesan'] ?>">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                <?php else: ?>
                    <p>Error: 'id' key is not set in the $infaq array.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>