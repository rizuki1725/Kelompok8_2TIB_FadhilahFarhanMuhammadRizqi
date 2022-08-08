<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $judul; ?></h1>
        </div>
        <div class="col-md-10 ">
            <div class="card">
                <section class="section">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form action="" method="POST">

                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik" value="<?= $siswa['nik']; ?>" class="form-control" id="nik" placeholder="NIK">
                                    <?= form_error('nik', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" value="<?= $siswa['nama_lengkap']; ?>" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                                    <?= form_error('nama_lengkap', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input type="text" name="nisn" value="<?= $siswa['nisn']; ?>" class="form-control" id="nisn" placeholder="NISN">
                                    <?= form_error('nisn', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" value="<?= $siswa['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">
                                    <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="anak_ke">Anak ke</label>
                                    <input type="text" name="anak_ke" value="<?= $siswa['anak_ke']; ?>" class="form-control" id="anak_ke" placeholder="Anak ke">
                                    <?= form_error('anak_ke', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="dari">Dari</label>
                                    <input type="text" name="dari" value="<?= $siswa['dari']; ?>" class="form-control" id="dari" placeholder="Dari">
                                    <?= form_error('dari', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" value="<?= $siswa['asal_sekolah']; ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                                    <?= form_error('asal_sekolah', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="ayah">Ayah</label>
                                    <select name="ayah" id="menu_id" class="form-control">
                                        <?php foreach ($ayah as $p) : ?>
                                            <option value="<?= $p['nik']; ?>" <?php if ($siswa['ayah'] == $p['nik']) { ?> selected <?php } ?>> <?= $p['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ibu">Ibu</label>
                                    <select name="ibu" id="menu_id" class="form-control">
                                        <?php foreach ($ibu as $p) : ?>
                                            <option value="<?= $p['nik']; ?>" <?php if ($siswa['ibu'] == $p['nik']) { ?> selected <?php } ?>> <?= $p['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="wali">Wali</label>
                                    <select name="wali" id="menu_id" class="form-control">
                                        <?php foreach ($wali as $p) : ?>
                                            <option value="<?= $p['nik']; ?>" <?php if ($siswa['wali'] == $p['nik']) { ?> selected <?php } ?>> <?= $p['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" name="jurusan" value="<?= $siswa['jurusan']; ?>" class="form-control" id="jurusan" placeholder="Jurusan">
                                    <?= form_error('jurusan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>


                                <a href="<?= base_url('Siswa') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Siswa</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>