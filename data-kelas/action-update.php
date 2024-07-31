<?php
if(isset($_POST['Submit'])){
    $IdKelas = $_POST['IdKelas'];
    $NamaKelas = $_POST['NamaKelas'];
    $KompetensiKeahlian = $_POST['KompetensiKeahlian'];

    include '../koneksi.php';
    $query_mysql = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$NamaKelas',kompetensi_keahlian='$KompetensiKeahlian' WHERE id_kelas='$IdKelas' ");

    if($query_mysql) {
        echo "<script>alert('Data Kelas berhasil diupdate'); window.location.href='read.php'</script>";
    } else{
        echo "<script>alert('Data Kelas gagal diupdate'); window.location.href='read.php'</script>";
    }
}
?>