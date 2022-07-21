<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Halaman Data Siswa</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <td>No</td>
              <td>Nama</td>
              <td>NIK</td>
              <td>NISN</td>
              <td>Asal Sekolah</td>
              <td>Ayah</td>
              <td>Ibu</td>
              <td>Wali</td>
              <td>Jurusan</td>
              <td>Aksi</td>
            </tr>
          </thead>
          <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($siswa as $us) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $us['nama_lengkap']; ?></td>
                        <td><?= $us['nik']; ?></td>
                        <td><?= $us['nisn']; ?></td>
                        <td><?= $us['asal_sekolah']; ?></td>
                        <td><?= $us['ayah']; ?></td>
                        <td><?= $us['ibu']; ?></td>
                        <td><?= $us['wali']; ?></td>
                        <td><?= $us['jurusan']; ?></td>
                        <td>
                            <a href="<?= base_url('Siswa/hapus/') . $us['id']; ?>"
                                class="badge badge-danger">Hapus</a>
                            <a href="<?= base_url('Siswa/edit/') . $us['id']; ?>"
                                class="badge badge-warning">Edit</a>
                            <a href="<?= base_url('Siswa/detail/') . $us['id']; ?>"
                                class="badge badge-info">Detail</a>
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