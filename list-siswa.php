<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Siswa Baru | SMK Coding</title>
  <link rel="stylesheet" href="css/list.css">
</head>
<body>
  
<div class="container">
  <div class="card">
    <div class="header">
      <h2>Daftar Siswa Terdaftar</h2>
      <a href="form-daftar.php" class="btn tambah">+ Tambah Baru</a>
    </div>

    <div class="tabel-siswa">
      <table class="tabel">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Sekolah Asal</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        $no = 1;

        while ($siswa = mysqli_fetch_array($query)) {
          echo "<tr>";
          echo "<td>".$no++."</td>";
          echo "<td>".$siswa['nama']."</td>";
          echo "<td>".$siswa['alamat']."</td>";
          echo "<td>".$siswa['jenis_kelamin']."</td>";
          echo "<td>".$siswa['agama']."</td>";
          echo "<td>".$siswa['sekolah_asal']."</td>";
          echo "<td class='aksi'>
                  <a class='btn edit' href='form-edit.php?id=".$siswa['id']."'>Edit</a>
                  <a class='btn hapus' href='hapus.php?id=".$siswa['id']."' onclick=\"return confirm('Yakin ingin hapus?')\">Hapus</a>
                </td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    </div>
    <p class="total">Total: <?php echo mysqli_num_rows($query) ?></p>
    <a href="index.php" class="btn tambah">Kembali Halaman Utama</a>
  </div>
</div>

</body>
</html>
