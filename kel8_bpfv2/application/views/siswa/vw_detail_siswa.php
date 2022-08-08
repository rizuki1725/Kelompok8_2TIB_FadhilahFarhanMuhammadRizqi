<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Data Siswa</h1>
        </div>
        <div class="col-md-6">
            <a href="<?= base_url('Siswa/detail/') . $siswa['nik']; ?>" class="btn btn-info mb-2">Data Siswa</a>
        </div>
        <div class="card-header">
            Detail Data Siswa
        </div>
        <div class="card-body">
            <h2 class="card-title"><?= $siswa['nama_lengkap']; ?></h2>
            <h6 class="card-subtitle mb-2 text-muted"><?= $siswa['jurusan']; ?></h6>
            <div class="row">
                <div class="col-md-4">NIK</div>
                <div class="col-md-2">:</div>
                <div class="col-md-6"><?= $siswa['nik']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-4">NISN</div>
                <div class="col-md-2">:</div>
                <div class="col-md-6"><?= $siswa['nisn']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-4">Alamat</div>
                <div class="col-md-2">:</div>
                <div class="col-md-6"><?= $siswa['alamat']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-4">Anak ke</div>
                <div class="col-md-2">:</div>
                <div class="col-md-6"><?= $siswa['anak_ke']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-4">Dari</div>
                <div class="col-md-2">:</div>
                <div class="col-md-6"><?= $siswa['dari']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-4">Asal Sekolah</div>
                <div class="col-md-2">:</div>
                <div class="col-md-6"><?= $siswa['asal_sekolah']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-4">Nama Ayah</div>
                <div class="col-md-2">:</div>
                <div class="col-md-6"><?= $siswa['ayah']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-4">Nama Ibu</div>
                <div class="col-md-2">:</div>
                <div class="col-md-6"><?= $siswa['ibu']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-4">Nama Wali</div>
                <div class="col-md-2">:</div>
                <div class="col-md-6"><?= $siswa['wali']; ?></div>
            </div>

        </div>
</div>