<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url();?>penduduk/addPenduduk" class="btn btn-primary">Tambah Penduduk</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Manusia</h3>
            <ul class="list-group">
                <?php foreach( $penduduk as $p ): ?>
                    <li class="list-group-item"><?= $p['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>