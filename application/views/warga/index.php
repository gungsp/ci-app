<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h4>Daftar Warga CCP</h4>
            <table class="table">
                <thead class="text-center">
                    <th>No. </th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </thead>
                <?php 
                foreach( $warga as $w) : ?>
                    <tbody>
                        <th><?= ++$start; ?></th>
                        <th><?= $w['name']; ?></th>
                        <th><?= $w['address']; ?></th>
                        <th><a href="" class="badge badge-primary m-right">detail</a><a href="" class="badge badge-warning m-right">ubah</a><a href="" class="badge badge-danger m-right">hapus</a></th>
                    </tbody>
                <?php endforeach; ?>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>