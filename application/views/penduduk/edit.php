<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
              <div class="card-header">
                <h4>Ubah data penduduk</h4>
              </div>
              <div class="card-body">
              <form action="" method="post">
                  <input type="hidden" name="id" value="<?= $penduduk['id'];?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama" value="<?= $penduduk['nama']; ?>">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nim">Social Credit</label>
                    <input type="number" class="form-control" id="nim" placeholder="Masukan social credit" name="nim" value="<?= $penduduk['nim']; ?>">
                    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukan email" name="email" value="<?= $penduduk['email']; ?>">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select id="jurusan" name="jurusan" class="form-control">
                        <?php foreach( $jurusan as $j) : ?>
                            <?php if( $j == $penduduk['jurusan'] ): ?>
                                <option value="<?= $j; ?>" selected><?= $j; ?></option>
                            <?php else : ?>
                                <option value="<?= $j; ?>"><?= $j; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary float-right">Ubah data</button>
                </form>
            </div>
        </div>
    </div>
</div>