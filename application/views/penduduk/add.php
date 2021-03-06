<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
              <div class="card-header">
                <h4>Tambah data penduduk</h4>
              </div>
              <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nim">Social Credit</label>
                    <input type="number" class="form-control" id="nim" placeholder="Masukan social credit" name="nim">
                    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukan email" name="email">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select id="jurusan" name="jurusan" class="form-control">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Informatika">Pengangguran</option>
                        <option value="Teknik Informatika">Psikologi</option>
                        <option value="Teknik Informatika">Teknik Elektro</option>
                        <option value="Teknik Informatika">Teknik Nuklir</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary float-right">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>