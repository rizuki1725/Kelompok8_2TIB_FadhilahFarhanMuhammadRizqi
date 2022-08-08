<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $judul; ?></h1>
        </div>
        <div class="col-md-10 ">
            <div class="card">
                <div class="card-header justify-content-left">
                    Data Siswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" value="<?= set_value('nik') ?>" class="form-control" id="nik" placeholder="NIK">
                            <?= form_error('nik', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" value="<?= set_value('nama_lengkap') ?>" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                            <?= form_error('nama_lengkap', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" name="nisn" value="<?= set_value('nisn') ?>" class="form-control" id="nisn" placeholder="NISN">
                            <?= form_error('nisn', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="anak_ke">Anak Ke</label>
                            <input type="text" name="anak_ke" value="<?= set_value('anak_ke') ?>" class="form-control" id="anak_ke" placeholder="Anak Ke">
                            <?= form_error('anak_ke', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="dari">Dari</label>
                            <input type="text" name="dari" value="<?= set_value('dari') ?>" class="form-control" id="dari" placeholder="Dari">
                            <?= form_error('dari', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" value="<?= set_value('asal_sekolah') ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                            <?= form_error('asal_sekolah', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="ayah">Ayah</label>
                            <select name="ayah" id="ayah" value="<?= set_value('ayah') ?>" class="form-control">
                                <option value="">Ayah</option>
                                <?php foreach ($ayah as $p) : ?>
                                    <option value="<?= $p['nik']; ?>"><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ibu">Ibu</label>
                            <select name="ibu" id="ibu" value="<?= set_value('ibu') ?>" class="form-control">
                                <option value="">Ibu</option>
                                <?php foreach ($ibu as $p) : ?>
                                    <option value="<?= $p['nik']; ?>"><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="wali">Wali (Opsional, jika tidak ada pilih data NULL)</label>
                            <select name="wali" id="wali" value="<?= set_value('wali') ?>" class="form-control">
                                <option value="">Wali</option>
                                <?php foreach ($wali as $p) : ?>
                                    <option value="<?= $p['nik']; ?>"><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" value="<?= set_value('jurusan') ?>" class="form-control" id="jurusan" placeholder="Jurusan">
                            <?= form_error('jurusan', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Tambah Siswa
                        </button>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>