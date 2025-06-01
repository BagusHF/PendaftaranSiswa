<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SMK Coding | Pendaftaran Siswa Baru</title>

  <!-- Bootstrap CSS & Animate.css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-success" href="#">SMK<span class="text-primary">Coding</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#jurusan">Jurusan</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">Alamat</a></li>
          <li class="nav-item"><a class="btn btn-success ms-2 px-4" href="list-siswa.php">Pendaftar</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero d-flex align-items-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">
            Selamat Datang, <br> di SMKN 4 KENDAL
          </h1>
          <p class="lead text-light mb-4 animate__animated animate__fadeInUp animate__delay-1s">
            SMK Negeri 4 Kendal Sekolah dengan segudang prestasi yang memiliki tenaga pendidik profesional jutaan siswa alumni telah memberikan ulasan bintang 5 untuk sekolah kami.
          </p>
          <a href="form-daftar.php" class="btn btn-outline-light btn-lg animate__animated animate__fadeInUp animate__delay-2s">
            Daftar Sekarang
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Jurusan Section -->
  <!-- Link Font Awesome CDN (untuk icon) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

<section id="jurusan" class="py-5 bg-light">
  <div class="jurusan-section">
    <h2 class="fw-bold">Jurusan</h2>
    <p>Pilih jurusan sesuai minat dan bakatmu.</p>

    <div class="jurusan-container">
      <div class="jurusan-card">
        <i class="fas fa-code icon"></i>
        <h3>Pengembangan Perangkat <br> Lunak dan Gim</h3>
        <p>PPLG</p>
        <p>Jurusan ini mempelajari dan mendalami cara-cara mengembangkan perangkat lunak. Mulai dari pembuatan, pemeliharaan, manajemen kualitas, dan manajemen organisasi pengembangan perangkat lunak. Tujuan Rekayasa Perangkat Lunak (RPL) mencakup berbagai aspek yang bertujuan untuk menciptakan, mengelola, dan memelihara perangkat lunak dengan cara yang efektif dan efisien.</p>
      </div>
      <div class="jurusan-card">
        <i class="fas fa-network-wired icon"></i>
        <h3>Teknik Jaringan Komputer dan Telekomunikasi</h3>
        <p>TJKT</p>
        <p>TJKT (Teknik Jaringan Komputer dan Telekomunikasi) adalah sebuah program keahlian yang termasuk dalam teknik elektronika. Jurusan ini khusus mempelajari tentang instalasi komputer, instalasi jaringan, troubleshooting komputer dan jaringan, serta mempelajari program komputer.</p>
      </div>
      <div class="jurusan-card">
        <i class="fas fa-utensils icon"></i>
        <h3>Kuliner</h3>
        <br>
        <p>Jurusan Kuliner mempelajari teknik penyajian makanan dengan memperhatikan estetika, kualitas, rasa, dan kebutuhan gizi. Kamu akan belajar mengolah berbagai hidangan daerah dan berbagai negara negara. Misalnya masakan barat, masakan Cina, masakan Timur tengah, dan masakan nusantara. Tidak hanya belajar mengolah makanan, kamu juga akan belajar bagaimana meracik minuman dan mempelajari cara menghidangkannya.</p>
      </div>
      <div class="jurusan-card">
        <i class="fas fa-car icon"></i>
        <h3>Teknik Otomotif</h3>
        <p>TO</p>
        <p>Teknik Otomotif adalah bidang studi yang memfokuskan pada perancangan, produksi, pemeliharaan, dan perbaikan kendaraan bermotor seperti mobil, sepeda motor, dan alat transportasi lainnya. Mahasiswa dalam jurusan ini akan memperoleh pengetahuan teknis dan keterampilan praktis yang diperlukan untuk bekerja di industri otomotif yang terus berkembang.</p>
      </div>
      <div class="jurusan-card">
        <i class="fas fa-industry icon"></i>
        <h3>Agribisnis Perikanan Air Tawar</h3>
        <p>APAT</p>
        <p> Agribisnis Perikanan Air Tawar (APAT) merupakan Kompetensi  Keahlian yang melakukan serangkaian kegiatan pembelajaran Budidaya Perikanan Air Tawar mulai dari pembenihan, pendederan, pembesaran, penanganan hasil panen dan pasca panen, baik itu ikan hias maupun ikan konsumsi.</p>
      </div>
      <div class="jurusan-card">
        <i class="fas fa-paint-brush icon"></i>
        <h3>Nautika Kapal Penangkap Ikan</h3>
        <p>NKPI</p>
        <p>Di jurusan ini, siswa mendalami keterampilan dan pengetahuan untuk menjadi anak buah kapal (ABK) penangkap ikan. Keahlian yang dipelajari antara lain perawatan kapal, perawatan alat tangkap ikan, navigasi, menangkap ikan dengan berbagai alat, menangani tangkapan ikan, hingga pelayanan medis di atas kapal. Lulusannya ditargetkan menguasai prosedur SAR, keselamatan kerja, dan keamanan kapal serta memahami bangunan kapal dan hukum laut.</p>
      </div>
    </div>
  </div>
</section>

<!-- Tentang Section -->
  <section id="about" class="py-5 bg-light">
    <div class="alamat-section">
      <div class="container">
      <!-- Alamat dan Lokasi -->
        <div class="text-center mt-5">
          <h2 class="fw-bold">Alamat</h2>
          <p class="text-muted"></p>
            <!-- Embed Google Maps -->
            <div class="mt-3">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4988.340375419095!2d110.22669447351753!3d-6.946951954954882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e705d9c2a3b439b%3A0xcd3827ba60db3c5!2sSMK%20Negeri%204%20Kendal!5e0!3m2!1sid!2sid!4v1747804660869!5m2!1sid!2sid"
                width="100%" 
                height="500" 
                style="border:0; border-radius: 25px;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
      </div>
    </div>
  </section>

<!-- Footer -->
<footer class="bg-dark text-light py-3 mt-5 text-center">
  <small>&copy; 2025 SMK Coding. By BagusHF.</small>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
