<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <section class="section">
                    <div class="section-header">
                        <h1>Halaman Data Siswa</h1>
                    </div>
                    <div class="col-md-6"><a href="" class="btn btn-info mb-2">Data Siswa</a></div>
                    <div class="col-md-6"><a href="" class="btn btn-info mb-2">Data Orangtua</a></div>
                    <div class="col-md-6"><a href="" class="btn btn-info mb-2">Data Tambahan</a></div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="">

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" value="" class="form-control" id="nama" placeholder="Nama">
                                    <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" name="nim" value="" class="form-control" id="nim" placeholder="NIM">
                                    <?= form_error('nim', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" value="">
                                    <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="prodi">Jurusan</label>
                                    <select name="prodi" id="menu_id" class="form-control">
                                            <option value=""></option></select>
                                    </select>
                                    <?= form_error('prodi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" value="" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                                    <?= form_error('asal_sekolah', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" name="no_hp" value="" class="form-control" id="no_hp" placeholder="No HP">
                                    <?= form_error('no_hp', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" value="" class="form-control" id="alamat" placeholder="Alamat">
                                    <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data Mahasiswa</button>
                            </form>
                        </div>
                   </div>
                </section>
            </div>
        </div>
    </div>
</div>