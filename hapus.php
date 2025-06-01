<?php
include ('config.php');

$id = $_GET['id'];

// Buat query hapus data dari tabel siswa
$sql = "DELETE FROM calon_siswa WHERE id = $id";
$query = mysqli_query($db, $sql);

if($query){
    header("Location: list-siswa.php");
} else {
    die ("Gagal menghapus data: ");
}
?>
