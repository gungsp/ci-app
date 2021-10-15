<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Detail Penduduk</h5>
            <div class="card-body">
                <h5 class="card-title"><?= $penduduk['nama']; ?></h5>
                <p class="card-text"><strong class="text-muted"><?= $penduduk['nim']; ?></strong></p>
                <p class="card-text"><?= $penduduk['email']; ?></p>
                <p class="card-text"><strong><?= $penduduk['jurusan']; ?></strong></p>
                <a href="<?= base_url(); ?>penduduk/index" class="btn btn-primary">Kembali</a>
            </div>
        </div>

        </div>
    </div>
</div>