<?php
    include("config.php");

    //yang memproses pendaftaran
    //cek tombol daftar
    if(isset($_POST['daftar'])){

        //ambil data dari formulir
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];

        //buat squery
        $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama','$alamat','$jk','$agama','$sekolah')";
        $query = mysqli_query($db,$sql);

        //apakah simpan query berhasil
        if ($query){
            //kalau berhasil beralih di index.php
            header('Location:index.php?status=sukses');
        } else{
            //kalau gagal dengan status gagal
            header('Location:index.php?status=gagal');
        }
    
    }else{
        die("Akses dilarang...");
    }
?>