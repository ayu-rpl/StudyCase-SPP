<?php
include '../koneksi.php';
$IdKelas = $_GET['id_kelas'];
$query_mysql = mysqli_query($koneksi, "DELETE from kelas WHERE id_kelas=$IdKelas");
if($query_mysql) {
    echo "<script>alert('Data Kelas berhasil dihapus'); window.location.href='read.php'</script>";
} else {
    echo "<script>alert('Data Kelas gagal dihapus'); window.location.href='read.php'</script>";
}
?>