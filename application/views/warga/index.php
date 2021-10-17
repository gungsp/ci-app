<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h4>Daftar Warga CCP</h4>
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari warga..." name="keyword">
                        <div class="input-group-append">
                            <input class="btn btn-outline-secondary" type="submit" id="button-addon2" name="submit">
                        </div>
                    </div>
                </form>
            </div>
            <h5>Result = <?= $total_rows; ?></h5>
            <table class="table">
                <thead class="text-center">
                    <th>No. </th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </thead>
                <?php if( empty($warga) ) : ?>
                            <tr>
                                <td colspan="4">
                                    <div class="alert alert-danger" role="alert">
                                        A simple danger alert—check it out!
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                <?php 
                foreach( $warga as $w) : ?>
                    <tbody>
                        <th class="text-center"><?= ++$start; ?></th>
                        <th><?= $w['name']; ?></th>
                        <th><?= $w['address']; ?></th>
                        <th  class="text-center"><a href="" class="badge badge-primary m-right">detail</a><a href="" class="badge badge-warning m-right">ubah</a><a href="" class="badge badge-danger m-right">hapus</a></th>
                    </tbody>
                <?php endforeach; ?>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>