<!-- Begin Page Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Data Ayah</h1>
        </div>
        <div class="col-md-10 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Ayah
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" value="<?= $ayah['nik']; ?>" class="form-control" id="nik" placeholder="NIK">
                            <?= form_error('nik', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Ayah</label>
                            <input type="text" name="nama" value="<?= $ayah['nama']; ?>" class="form-control" id="nama" placeholder="Nama Ayah">
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="<?= $ayah['tempat_lahir']; ?>" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="<?= $ayah['tanggal_lahir']; ?>" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan" value="<?= $ayah['pekerjaan']; ?>" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
                            <?= form_error('pekerjaan', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan" value="<?= $ayah['pendidikan']; ?>" class="form-control" id="pendidikan" placeholder="Pendidikan Terakhir">
                            <?= form_error('pendidikan', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" value="<?= $ayah['no_hp']; ?>" class="form-control" id="no_hp" placeholder="No HP">
                            <?= form_error('no_hp', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= $ayah['email']; ?>" class="form-control" id="email" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="<?= $ayah['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="penghasilan">Penghasilan</label>
                            <input type="text" name="penghasilan" value="<?= $ayah['penghasilan']; ?>" class="form-control" id="penghasilan" placeholder="Penghasilan">
                            <?= form_error('penghasilan', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <a href="<?= base_url('Ayah') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data
                            Ayah</button>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
</div>