<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url();?>penduduk/addPenduduk" class="btn btn-primary">Tambah Penduduk</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari penduduk.." name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <h3>Daftar Manusia</h3>
            <?php if( empty($penduduk) ) : ?>
                <div class="alert alert-danger" role="alert">
                Data mahasiswa tidak ditemukan!
                </div>
            <?php endif; ?>
            <?php if( $this->session->flashdata('flash')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach( $penduduk as $p ): ?>
                    <li class="list-group-item">
                        <?= $p['nama']; ?>
                        <a href="<?= base_url(); ?>penduduk/deletePenduduk/<?= $p['id']; ?>" class="badge badge-danger float-right">hapus</a>
                        <a href="<?= base_url(); ?>penduduk/editPenduduk/<?= $p['id']; ?>" class="badge badge-warning float-right m-right">ubah</a>
                        <a href="<?= base_url(); ?>penduduk/detail/<?= $p['id']; ?>" class="badge badge-primary float-right m-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>