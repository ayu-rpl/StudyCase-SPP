<?php
if(isset($_POST['Submit'])){
    $IdPetugas = $_POST['IdPetugas'];
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);
    $NamaKelas = $_POST['NamaKelas'];
    $Level = $_POST['Level'];

    include '../koneksi.php';
    $query_mysql = mysqli_query($koneksi, "UPDATE petugas SET username='$Username',password='$Password',nama_kelas='$NamaKelas',level='$Level' WHERE id_petugas='$IdPetugas' ");

    if($query_mysql) {
        echo "<script>alert('Data Petugas berhasil diupdate'); window.location.href='read.php'</script>";
    } else{
        echo "<script>alert('Data Petugas gagal diupdate'); window.location.href='read.php'</script>";
    }
}
?>