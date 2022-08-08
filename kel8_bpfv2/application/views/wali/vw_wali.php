<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Data Wali</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIK</td>
                            <td>Nama</td>
                            <td>Tempat Lahir</td>
                            <td>Tanggal Lahir</td>
                            <td>Pekerjaan</td>
                            <td>Pendidikan Terakhir</td>
                            <td>No HP</td>
                            <td>Email</td>
                            <td>Alamat</td>
                            <td>Penghasilan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($wali as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['nik']; ?></td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['tempat_lahir']; ?></td>
                                <td><?= $us['tanggal_lahir']; ?></td>
                                <td><?= $us['pekerjaan']; ?></td>
                                <td><?= $us['pendidikan']; ?></td>
                                <td><?= $us['no_hp']; ?></td>
                                <td><?= $us['email']; ?></td>
                                <td><?= $us['alamat']; ?></td>
                                <td><?= $us['penghasilan']; ?></td>
                                <td>
                                    <a href="<?= base_url('Wali/hapus/') . $us['nik']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Wali/edit/') . $us['nik']; ?>" class="badge badge-warning">Edit</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>
</section>
</div>