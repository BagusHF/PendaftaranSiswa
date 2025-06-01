<?php
    include("config.php");

    //kalau tidak ada id di query string
    if (!isset($_GET['id'])) {
        header('Location:list-siswa.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    //buat query untuk ambil data dari database
    $sql = "SELECT * FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db,$sql);
    $siswa = mysqli_fetch_assoc($query);

    //jika data yang diedit tidak ditemukan
    if (mysqli_num_rows($query)< 1) {
        die("data tidak ditemukan");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa | SMK Coding</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate On Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
     <section class="bg-light py-5">
        <div class="container">
            <div class="card form-container shadow-lg p-4 mx-auto" style="max-width: 600px;" data-aos="zoom-in">
            <h2 class="text-center mb-4">Formulir Edit Siswa</h2>
            <form action="proses-edit.php"  method="POST">
                <input type="hidden" name="id" value="<?php echo $siswa['id']?>"/>
                <!-- Kolom Nama -->            
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" id="nama" name="nama" value="<?php echo $siswa['nama']?>" required/>
                </div>

                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap" name="alamat" rows="3" required><?php echo $siswa['alamat']?></textarea>
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div class="form-check">
                        <?php $jk = $siswa['jenis_kelamin'];?>
                        <label><input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="laki-laki"<?php echo($jk=='laki-laki')?"checked":""?>>Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <label><input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan"<?php echo($jk=='perempuan')?"checked":""?>>Perempuan</label>
                    </div>
                </div>

                <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <?php $agama = $siswa['agama'];?>
                <select class="form-select" id="agama" name="agama" required>
                    <option selected disabled value="">-- Pilih Agama --</option>
                    <option <?php echo($agama=='Islam')?"selected":""?>>Islam</option>
                    <option <?php echo($agama=='Kristen')?"selected":""?>>Kristen</option>
                    <option <?php echo($agama=='Hindu')?"selected":""?>>Hindu</option>
                    <option <?php echo($agama=='Budha')?"selected":""?>>Budha</option>
                    <option <?php echo($agama=='Atheis')?"selected":""?>>Atheis</option>
                </select>
                </div>

                <div class="mb-3">
                    <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" placeholder="Masukkan Nama Sekolah" value="<?php echo $siswa['sekolah_asal']?>" class="form-control" id="sekolah_asal" name="sekolah_asal" required/>
                </div>

                <div class="d-grid">
                <input type="submit" class="btn btn-primary btn-lg" value="Simpan" name="simpan"/>
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