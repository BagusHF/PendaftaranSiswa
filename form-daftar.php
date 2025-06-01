<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate On Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/daftar.css">

</head>
<body>
    <section class="bg-light py-5">
        <div class="container">
            <div class="card form-container shadow-lg p-4 mx-auto" style="max-width: 600px;" data-aos="zoom-in">
            <h2 class="text-center mb-4">Formulir Pendaftaran</h2>
            <form action="proses-pendaftaran.php" method="POST">
                
                <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" id="nama" name="nama" required>
                </div>

                <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap" name="alamat" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                </div>

                <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <select class="form-select" id="agama" name="agama" required>
                    <option selected disabled value="">-- Pilih Agama --</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>Khonghucu</option>
                </select>
                </div>

                <div class="mb-3">
                <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
                <input type="text" placeholder="Masukkan Nama Sekolah" class="form-control" id="sekolah_asal" name="sekolah_asal" required>
                </div>

                <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg" name="daftar">Daftar</button>
                </div>
            </form>
            </div>
        </div>
    </section>
</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS JS (Animasi) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>