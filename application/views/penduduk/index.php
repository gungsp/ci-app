<div class="container">
    <div class="row">
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